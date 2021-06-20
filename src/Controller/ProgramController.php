<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Episode;
use App\Entity\Program;
use App\Entity\Season;
use App\Form\CommentType;
use App\Form\ProgramType;
use App\Form\SearchProgramType;
use App\Repository\ProgramRepository;
use App\Service\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * @Route("/programs", name="program_")
 */
class ProgramController extends AbstractController
{
    /**
     * show all rows from Program's entity
     * 
     * @Route("/", name="index")
     * @return Response A response instance
     */
    public function index(Request $request, ProgramRepository $programRepository): Response
    {
        $form = $this->createForm(SearchProgramType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData()['search'];
            $programs = $programRepository->findLikeName($search);
        } else {
            $programs= $programRepository->findAll();
        }

        return $this->render('program/index.html.twig', [
            'programs' => $programs,
            'form' => $form->createView(),
         ]);
    }

    /**
     * The controller for the program add form
     * 
     * @Route("/new", name="new")
     */
    public function new(Request $request, Slugify $slugify, MailerInterface $mailer): Response
    {
        // Create a new Program Object
        $program = new Program();
        // Create the associated Form
        $form = $this->createForm(ProgramType::class, $program);
        // Get data from HTTP request
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the Entity Manager
            $entityManager = $this->getDoctrine()->getManager();
            //ajout du service avant le persist
            $slug = $slugify->generate($program->getTitle());
            $program->setSlug($slug);
            $program->setOwner($this->getUser());
            // Persist Category Object
            $entityManager->persist($program);
            // Flush the persisted object
            $entityManager->flush();
            // Finally redirect to categories list

            $email = (new Email())
                        ->from($this->getParameter('mailer_from'))
                        ->to('your_email@example.com')
                        ->subject('Une nouvelle série vient d\'être publiée !')
                        ->html($this->renderView('program/newProgramEmail.html.twig', ['program' => $program]));
        
            $mailer->send($email);

            $this->addFlash('success', 'The new program has been created');

            return $this->redirectToRoute('program_index');
        }

        return $this->render('program/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * getting a program by slug
     * 
     * @Route("/{slug}", methods={"GET"}, name="show")
     * @return Response
     */
    public function show(Program $program): Response
    {
        return $this->render('program/show.html.twig', [
            'program' => $program,
            'seasons' => $program->getSeasons(),
         ]);
    }

    #[Route('/{slug}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Program $program): Response
    {
        if (!($this->getUser() == $program->getOwner())) {
            // If not the owner, throws a 403 Access Denied exception
            throw new AccessDeniedException('Only the owner can edit the program!');
        }

        $form = $this->createForm(ProgramType::class, $program);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'The program has been modified');

            return $this->redirectToRoute('program_show', ['slug' => $program->getSlug()]);
        }

        return $this->render('program/edit.html.twig', [
            'program' => $program,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{programSlug}/season/{seasonId}", name="season_show")
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"programSlug": "slug"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     * @return Response
     */
    public function showSeason(Program $program, Season $season): Response
    {
        return $this->render('program/showSeason.html.twig', [
            'program' =>$program,
            'season' => $season,
            'episodes' => $season->getEpisodes(),
        ]);
    }

    /**
     * @Route("/{programSlug}/seasons/{seasonId}/episodes/{episodeSlug}", name="episode_show")
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"programSlug": "slug"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     * @ParamConverter("episode", class="App\Entity\Episode", options={"mapping": {"episodeSlug": "slug"}})
     * @return Response
     */
    public function showEpisode(Program $program, Season $season, Episode $episode, Request $request): Response
    {
        $comments = $this->getDoctrine()
                    ->getRepository(Comment::class)
                    ->findByEpisode($episode);
        
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setAuthor($this->getUser())
                    ->setEpisode($episode);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('program_episode_show', [
                'programSlug' => $program->getSlug(),
                'seasonId' => $season->getId(),
                'episodeSlug' => $episode->getSlug(),
            ]);
        }
        return $this->render('program/episode_show.html.twig', [
            'program' => $program,
            'season' => $season,
            'episode' => $episode,
            'comments' => $comments,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{slug}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Program $program): Response
    {
        if ($this->isCsrfTokenValid('delete'.$program->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($program);
            $entityManager->flush();

            $this->addFlash('danger', 'The program has been deleted');
        }

        return $this->redirectToRoute('program_index');
    }

    /**
     * @Route("program/{id}/watchlist", name="watchlist", methods={"GET","POST"})
     * @return Response
     */
    public function addToWatchlist(Program $program): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        if ($this->getUser() && $this->getUser()->isInWatchlist($program)) {
            $this->getUser()->removeWatchlist($program);
        } else {
            $this->getUser()->addWatchlist($program);
        }

        $entityManager->flush();

        return $this->json([
            'isInWatchlist' => $this->getUser()->isInWatchlist($program)
        ]);
    }

    // /**
    //  * @Route("program/{id}/watchlistremove", name="watchlist_remove", methods={"GET","POST"})
    //  * @return Response
    //  */
    // public function removeOfWatchlist(Program $program)
    // {
    //     $entityManager = $this->getDoctrine()->getManager();

    //     if ($this->getUser()) {
    //         $this->getUser()->removeWatchlist($program);
    //         $entityManager->flush();

    //         $this->addFlash('danger', 'The program has been removed of your watchlist');

    //         return $this->redirectToRoute('program_show', ['slug' => $program->getSlug()]);
    //     }

    //     return $this->redirectToRoute('program_show', ['slug' => $program->getSlug()]);
    // }
}
