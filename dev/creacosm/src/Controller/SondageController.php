<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Reponse;
use App\Entity\Sondage;
use App\Entity\Theme;
use App\Entity\Type;
use App\Form\SondageType;
use App\Repository\QuestionRepository;
use App\Repository\ReponseRepository;
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


    #[Route('/createTheme', name: 'app_theme', methods: ['GET','POST'])]
    public function createTheme(ThemeRepository $themeRepository):Response
    {
        $theme = $themeRepository->findAll();
        return $this->render('sondage/create_theme.html.twig', [
            'theme' => $theme,
        ],);
    }

    #[Route('/creationTheme', name: 'app_theme_creation', methods: ['GET','POST'])]
    public function creationTheme(ThemeRepository $themeRepository):Response
    {
        $theme = $themeRepository->findAll();

        $nom = $_POST["theme"];
        $theme = new Theme();
        $theme->setTheme($nom);
        $themeRepository->save($theme,true);
        return $this->redirectToRoute('app_theme', [
            'theme' => $theme,
        ],Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/deleteTheme', name: 'app_theme_delete', methods: ['GET','POST'])]
    public function deleteTheme(Request $request, ThemeRepository $themeRepository):Response
    {
        $id = $request->attributes->get("id");

        $themeRepository->remove($themeRepository->find($id),true);
        $theme = $themeRepository->findAll();

        return $this->redirectToRoute('app_theme', [
            'theme' => $theme,
        ],Response::HTTP_SEE_OTHER);
    }

    #[Route('/new', name: 'app_sondage_new', methods: ['GET', 'POST'])]
    public function new(Request $request,ThemeRepository $themeRepository, SondageRepository $sondageRepository): Response
    {
        $alltheme = $themeRepository->findAll();
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
            'theme'=>$alltheme,
        ]);
    }

    #[Route('/create', name: 'app_sondage_create', methods: ['GET', 'POST'])]
    public function create(Request $request, ReponseRepository $reponseRepository, ThemeRepository $themeRepository, SondageRepository $sondageRepository, TypeRepository $typeRepository, QuestionRepository $questionRepository): Response
    {
        $alltheme = $themeRepository->findAll();

        $nom =$_POST['nom'];
        $visbilite =$_POST['visibilite'];
        if($visbilite== 'public')
        {$visbilite=true;}
        else $visbilite=false;


        $theme = new Theme();
        $theme->setTheme($_POST["theme"]);
        $themeRepository->save($theme);

        $nb=$_POST["nbquestion"];
        $introduction =$_POST['introduction'];
        $nomQuestion = $_POST["intitule1"];

        $t = $_POST["type1"];
        $type = new Type();
        $type->setType($t);
        $typeRepository->save($type);

        $sondage= new Sondage();
        $sondage -> setTheme($theme)->setNom($nom)->setCreateur($this->getUser())
            ->setDatecreation(new \DateTime('now'))->setIntroduction($introduction)->setVisibilite($visbilite);
        $sondageRepository->save($sondage);


        $question = new Question();
        $question ->setIntitule($nomQuestion) ->setType($type)->setSondage($sondage);
        $questionRepository->save($question);

        switch ($t){
            case("multiple"):
                $j = 1;
                while( isset($_POST["reponse1-".$j])){
                    $rep =$_POST["reponse1-".$j];
                    $reponse= new Reponse();
                    $reponse->setReponse($rep);
                    $question->addReponse($reponse);
                    $reponseRepository->save($reponse);
                    $questionRepository->save($question,true);
                    $j++;
                }
                break;
            case("oui_non"):
                $rep1 = "oui";
                $reponse= new Reponse();
                $reponse->setReponse($rep1);
                $question->addReponse($reponse);
                $reponseRepository->save($reponse);
                $questionRepository->save($question,true);

                $rep2 ="non";
                $reponse2= new Reponse();
                $reponse2->setReponse($rep2);
                $question->addReponse($reponse2);
                $reponseRepository->save($reponse2);
                $questionRepository->save($question,true);

                break;
        }

        $sondage->addQuestion($question);

        for ($i = 2; $i<=$nb; $i++){
            $nomQuestion = $_POST["intitule".$i];
            $t= $_POST["type".$i];

            $type = new Type();
            $type->setType($t);
            $typeRepository->save($type);

            $question = new Question();
            $question ->setIntitule($nomQuestion) ->setType($type)->setSondage($sondage);
            $questionRepository->save($question,true);

            switch ($t){
                case("multiple"):
                    $j = 1;
                    while( isset($_POST["reponse".$i."-".$j])){
                        $rep =$_POST["reponse".$i."-".$j];
                        $reponse= new Reponse();
                        $reponse->setReponse($rep);
                        $question->addReponse($reponse);
                        $reponseRepository->save($reponse);
                        $questionRepository->save($question,true);
                        $j++;
                    }
                    break;
                case("oui_non"):
                    $rep1 = "oui";
                    $reponse= new Reponse();
                    $reponse->setReponse($rep1);
                    $question->addReponse($reponse);
                    $reponseRepository->save($reponse);
                    $questionRepository->save($question,true);

                    $rep2 ="non";
                    $reponse2= new Reponse();
                    $reponse2->setReponse($rep2);
                    $question->addReponse($reponse2);
                    $reponseRepository->save($reponse2);
                    $questionRepository->save($question,true);

                    break;
            }
            $sondage->addQuestion($question);
            $sondageRepository->save($sondage,true);
        }
        $sondageRepository->save($sondage,true);

        return $this->redirectToRoute('app_sondage_index', ['theme'=>$alltheme],Response::HTTP_SEE_OTHER);
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

        return $this->renderForm('sondage/edit.html.twig', [
            'sondage' => $sondage,
        ]);
    }

    #[Route('/{id}/edited', name: 'app_sondage_edited', methods: ['GET', 'POST'])]
    public function editted(Request $request,ReponseRepository $reponseRepository, TypeRepository $typeRepository, QuestionRepository $questionRepository, Sondage $sondage, SondageRepository $sondageRepository): Response
    {
        $nb=$_POST["nbquestion"];
        if($nb!="0") {

            $sondage = $sondageRepository->find($request->attributes->get("id"));

            $visibilite = $_POST["visibilite"];
            if ($visibilite == "public") {
                $visibilite = true;
            } else {
                $visibilite = false;
            }

            $sondage->setNom($_POST["nom"])->setIntroduction($_POST["introduction"])->setVisibilite($visibilite);
            $j = 1;
            while (isset($_POST["question" . $j])) {
                $intitulequestion = $_POST["question" . $j];
                $sondage->getQuestions()->get($j - 1)->setIntitule($intitulequestion);
                $i = 1;
                while (isset($_POST["reponse" . $j . $i])) {
                    $repquestion = $_POST["reponse" . $j . $i];
                    $sondage->getQuestions()->get($j - 1)->getReponses()->get($i - 1)->setReponse($repquestion);
                    $i++;
                }
                $j++;
            }
            $sondagedelete = [];
            for ($i = 0; $i < $sondage->getQuestions()->count(); $i++) {
                if (isset($_POST[$sondage->getQuestions()->get($i)->getId()]) && $_POST[$sondage->getQuestions()->get($i)->getId()] == "false") {
                    array_push($sondagedelete, $questionRepository->find($sondage->getQuestions()->get($i)->getId()));

                }

            }
            for ($i = 0; $i < count($sondagedelete); $i++) {
                $sondage->removeQuestion($questionRepository->find($sondagedelete[$i]));
            }


            $nb = $_POST["newquestion"];
            for ($i = 1; $i <= $nb; $i++) {
                $nomQuestion = $_POST["intitule" . $i];
                $t = $_POST["type" . $i];

                $type = new Type();
                $type->setType($t);
                $typeRepository->save($type);

                $question = new Question();
                $question->setIntitule($nomQuestion)->setType($type)->setSondage($sondage);
                $questionRepository->save($question, true);

                switch ($t) {
                    case("multiple"):
                        $j = 1;
                        while (isset($_POST["reponse" . $i . "-" . $j])) {
                            $rep = $_POST["reponse" . $i . "-" . $j];
                            $reponse = new Reponse();
                            $reponse->setReponse($rep);
                            $question->addReponse($reponse);
                            $reponseRepository->save($reponse);
                            $questionRepository->save($question, true);
                            $j++;
                        }
                        break;
                    case("oui_non"):
                        $rep1 = "oui";
                        $reponse = new Reponse();
                        $reponse->setReponse($rep1);
                        $question->addReponse($reponse);
                        $reponseRepository->save($reponse);
                        $questionRepository->save($question, true);

                        $rep2 = "non";
                        $reponse2 = new Reponse();
                        $reponse2->setReponse($rep2);
                        $question->addReponse($reponse2);
                        $reponseRepository->save($reponse2);
                        $questionRepository->save($question, true);

                        break;
                }
                $sondage->addQuestion($question);
                $sondageRepository->save($sondage, true);
            }

            $sondageRepository->save($sondage, true);


            return $this->redirectToRoute('app_sondage_index', [], Response::HTTP_SEE_OTHER);
        }
        else{
            return $this->redirectToRoute('app_sondage_edit', [
                'id' => $sondage->getId(), 'erreur' =>'Vous avez supprimer toute les questions'], Response::HTTP_SEE_OTHER);

        }

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