<?php

namespace App\Controller;

use App\Entity\Program;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(): Response
    {
        $programs = $this->getDoctrine()
                    ->getRepository(Program::class)
                    ->findBy([], ['id' => 'DESC'], 4,);
        return $this->render('default/index.html.twig', [
            'programs' => $programs,
        ]);
    }

    /**
     * @Route("/my-profile", name="app_profil")
     * IsGranted("ROLE_USER")
     */
    public function profil()
    {
        return $this->render('default/myprofil.html.twig', [
            'user' => $this->getUser(),
        ]); 
    }
}
