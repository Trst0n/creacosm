<?php

namespace App\Controller;

use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RacineController extends AbstractController
{
    #[Route('/racine', name: 'app_racine')]
    public function index(): Response
    {
        return $this->render('racine/index.html.twig', [
            'controller_name' => 'RacineController',
        ]);
    }

    #[Route('/accueil', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('racine/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/moncompte', name: 'app_moncompte')]
    public function account(): Response
    {
        return $this->render('racine/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


}
