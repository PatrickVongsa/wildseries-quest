<?php

namespace App\Controller;

use App\Entity\Actor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/actor', name: 'actor_')]
class ActorController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $actors = $this->getDoctrine()
            ->getRepository(Actor::class)
            ->findAll();
        
        return $this->render('actor/index.html.twig', [
            'actors' => $actors,
        ]);
    }

    #[Route("/actor/{id}", name: "show")]
    public function show(Actor $actor)
    {
        return $this->render('actor/show.html.twig', [
            'actor' => $actor,
        ]);
    }
}
