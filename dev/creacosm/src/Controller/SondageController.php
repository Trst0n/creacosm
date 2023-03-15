<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Sondage;
use App\Entity\Theme;
use App\Entity\Type;
use App\Form\SondageType;
use App\Repository\QuestionRepository;
use App\Repository\SondageRepository;
use App\Repository\ThemeRepository;
use App\Repository\TypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/sondage')]
class SondageController extends AbstractController
{
    #[Route('/', name: 'app_sondage_index', methods: ['GET'])]
    public function index(SondageRepository $sondageRepository): Response
    {
        return $this->render('sondage/index.html.twig', [
            'sondages' => $sondageRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sondage_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SondageRepository $sondageRepository): Response
    {
        $sondage = new Sondage();
        $form = $this->createForm(SondageType::class, $sondage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sondageRepository->save($sondage, true);

            return $this->redirectToRoute('app_sondage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sondage/create.html.twig', [
            'sondage' => $sondage,
            'form' => $form,
        ]);
    }

    #[Route('/create', name: 'app_sondage_create', methods: ['GET', 'POST'])]
    public function create(Request $request,ThemeRepository $themeRepository, SondageRepository $sondageRepository, TypeRepository $typeRepository, QuestionRepository $questionRepository): Response
    {
        $nom =$_POST['nom'];
        $visbilite =$_POST['visibilite'];
        if($visbilite== 'public')
            {$visbilite=true;}
        else $visbilite=false;

        $introduction =$_POST['introduction'];
        $theme = new Theme();
        $theme->setTheme("theme");
        $themeRepository->save($theme,true);

        $nb=$_POST["nbquestion"];

        $nomQuestion = $_POST["intitule1"];
        $t = $_POST["type1"];
        $type = new Type();
        $type->setType($t);
        $typeRepository->save($type,true);

        $sondage= new Sondage();
        $sondage -> setTheme($theme)->setNom($nom)->setCreateur($this->getUser())
            ->setDatecreation(new \DateTime('now'))->setIntroduction($introduction)->setVisibilite($visbilite);
        $sondageRepository->save($sondage,true);


        $question = new Question();
        $question ->setIntitule($nomQuestion) ->setType($type)->setSondage($sondage);
        $questionRepository->save($question,true);

       $sondage->addQuestion($question);

        $questionRepository->save($question,true);
        for ($i = 2; $i<=$nb; $i++){
            $nomQuestion = $_POST["intitule".$i];
            $t= $_POST["type".$i];
            $type = new Type();
            $type->setType($t);
            $typeRepository->save($type,true);
            $question = new Question();
            $question ->setIntitule($nomQuestion) ->setType($type)->setSondage($sondage);
            $questionRepository->save($question,true);
            $sondage->addQuestion($question);

        }
        $sondageRepository->save($sondage,true);

        return $this->redirectToRoute('app_sondage_index', [],Response::HTTP_SEE_OTHER);

    }

    #[Route('/{id}', name: 'app_sondage_show', methods: ['GET'])]
    public function show(Sondage $sondage): Response
    {
        return $this->render('sondage/show.html.twig', [
            'sondage' => $sondage,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sondage_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sondage $sondage, SondageRepository $sondageRepository): Response
    {
        $form = $this->createForm(SondageType::class, $sondage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sondageRepository->save($sondage, true);

            return $this->redirectToRoute('app_sondage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sondage/edit.html.twig', [
            'sondage' => $sondage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sondage_delete', methods: ['POST'])]
    public function delete(Request $request, Sondage $sondage, SondageRepository $sondageRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sondage->getId(), $request->request->get('_token'))) {
            $sondageRepository->remove($sondage, true);
        }

        return $this->redirectToRoute('app_sondage_index', [], Response::HTTP_SEE_OTHER);
    }
}
