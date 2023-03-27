<?php

namespace App\Controller;

use App\Repository\ThemeRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
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

        return $this->render('racine/moncompte.html.twig', [
            'test' => 'HomeController',
        ]);
    }

    #[Route('/setmoncompte', name: 'app_set_moncompte',methods: ['GET', 'POST'])]
    public function modifierInformation(UtilisateurRepository $utilisateurRepository, UserPasswordHasherInterface $passwordHash): Response
    {

        if (isset($_POST["login"])){
            $user = $utilisateurRepository->find($_POST["iduser"]);
            $user->setLogin($_POST['login']);
            $utilisateurRepository->save($user,true);
        }
        if (isset($_POST["password"])){
            $user = $utilisateurRepository->find($_POST["iduser"]);
            $user->setPassword($passwordHash->hashPassword($user, $_POST["password"]));
            $utilisateurRepository->save($user,true);
        }
        return $this->redirectToRoute('app_moncompte', []);
    }

    #[Route('/error403', name: 'app_error', methods: ['GET'])]
    public function error403(): Response
    {
        return $this->render('bundles/TwigBundle/Exception/error403.html.twig');
    }

    #[Route('/error404', name: 'app_error404', methods: ['GET'])]
    public function show404(): Response
    {
        return $this->render('bundles/TwigBundle/Exception/error404.html.twig');
    }

}
