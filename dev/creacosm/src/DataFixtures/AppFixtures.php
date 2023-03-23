<?php

namespace App\DataFixtures;

use App\Entity\Critere;
use App\Entity\Format;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Entity\Sondage;
use App\Entity\Statistique;
use App\Entity\Theme;
use App\Entity\Type;
use App\Entity\Utilisateur;
use App\Entity\Visuel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create("fr_FR");

        /** CREATION DES TYPES DE QUESTION **/
        $typeon = new Type();
        $typeon -> setType("oui_non");
        $manager->persist($typeon);

        $typemulti = new Type();
        $typemulti -> setType("multiple");
        $manager->persist($typemulti);

        $typeouv = new Type();
        $typeouv -> setType("ouverte");
        $manager->persist($typeouv);

        $critere = new Critere();
        $critere -> setCritere("age");
        $manager->persist($critere);

        $theme = new Theme();
        $theme -> setTheme("cosmetique");
        $manager->persist($theme);

        $format = new Format();
        $format->setFormat("diagramme");
        $manager->persist($format);

        /** CREATION QUESTION AGE **/
        $question = new Question();
        $question -> setType($typemulti) ->setIntitule("Quel age avez-vous ?");
        $manager->persist($question);

        $reponse1 = new Reponse();
        $reponse1 -> setReponse("Moins de 25 ans.")->setQuestion($question);
        $manager->persist($reponse1);

        $reponse2 = new Reponse();
        $reponse2 -> setReponse("Entre 26 ans et 35 ans.")->setQuestion($question);
        $manager->persist($reponse2);

        $reponse3 = new Reponse();
        $reponse3 -> setReponse("Entre 36 ans et 50 ans.")->setQuestion($question);
        $manager->persist($reponse3);

        $reponse4 = new Reponse();
        $reponse4 -> setReponse("Plus de 50 ans.")->setQuestion($question);
        $manager->persist($reponse4);

        /** CREATION QUESTION AGE **/
        $questionbis = new Question();
        $questionbis -> setType($typemulti) ->setIntitule("Quel age avez-vous ?") ;
        $manager->persist($questionbis);

        $reponse24 = new Reponse();
        $reponse24 -> setReponse("Moins de 25 ans.")->setQuestion($questionbis);
        $manager->persist($reponse24);

        $reponse25 = new Reponse();
        $reponse25 -> setReponse("Entre 26 ans et 35 ans.")->setQuestion($questionbis);
        $manager->persist($reponse25);

        $reponse26 = new Reponse();
        $reponse26 -> setReponse("Entre 36 ans et 50 ans.")->setQuestion($questionbis);
        $manager->persist($reponse26);

        $reponse27 = new Reponse();
        $reponse27 -> setReponse("Plus de 50 ans.")->setQuestion($questionbis);
        $manager->persist($reponse27);

        /** CREATION QUESTION OUI/NON **/
        $question2 = new Question();
        $question2 -> setType($typeon) ->setIntitule("Avez-vous testé notre nouveau produit cosmétique ?");
        $manager->persist($question2);

        $reponse5 = new Reponse();
        $reponse5 -> setReponse("Oui")->setQuestion($question2);
        $manager->persist($reponse5);

        $reponse6 = new Reponse();
        $reponse6 -> setReponse("Non")->setQuestion($question2);
        $manager->persist($reponse6);

        /** CREATION QUESTION PROFESSION **/
        $question1 = new Question();
        $question1 -> setType($typemulti) ->setIntitule("Que faites vous dans le vie ?") ;
        $manager->persist($question1);

        $reponse7 = new Reponse();
        $reponse7 -> setReponse("Etudiant")->setQuestion($question1);
        $manager->persist($reponse7);

        $reponse8 = new Reponse();
        $reponse8 -> setReponse("Auto-entrepreneur")->setQuestion($question1);
        $manager->persist($reponse8);

        $reponse9 = new Reponse();
        $reponse9 -> setReponse("Salarié")->setQuestion($question1);
        $manager->persist($reponse9);

        $reponse10 = new Reponse();
        $reponse10 -> setReponse("Retraite")->setQuestion($question1);
        $manager->persist($reponse10);

        $reponse11 = new Reponse();
        $reponse11 -> setReponse("Autre")->setQuestion($question1);
        $manager->persist($reponse11);

        /** CREATION QUESTION OUI/NON **/
        $question3 = new Question();
        $question3 -> setType($typeon) ->setIntitule("Le recommenderiez vous à des amis ?") ;
        $manager->persist($question3);

        $reponse12 = new Reponse();
        $reponse12 -> setReponse("Oui")->setQuestion($question3);
        $manager->persist($reponse12);

        $reponse13 = new Reponse();
        $reponse13 -> setReponse("Non")->setQuestion($question3);
        $manager->persist($reponse13);

        /** CREATION QUESTION OUVERTE **/
        $question4 = new Question();
        $question4 -> setType($typeouv) ->setIntitule("Donnez nous votre avis dessus :") ;
        $manager->persist($question4);


        /** CREATION QUESTION MULTIPLE **/
        $question5 = new Question();
        $question5 -> setType($typemulti) ->setIntitule("Quel type de produit aimeriez vous voir apparaitre dans notre ligne de cosmétique ?") ;
        $manager->persist($question5);

        $reponse15 = new Reponse();
        $reponse15 -> setReponse("Baume à lèvre")->setQuestion($question5);
        $manager->persist($reponse15);

        $reponse16 = new Reponse();
        $reponse16 -> setReponse("Crème hydratante")->setQuestion($question5);
        $manager->persist($reponse16);

        $reponse17 = new Reponse();
        $reponse17 -> setReponse("Masque")->setQuestion($question5);
        $manager->persist($reponse17);

        $reponse18 = new Reponse();
        $reponse18 -> setReponse("Maquillage (fond de tein, eyeliner ..) ")->setQuestion($question5);
        $manager->persist($reponse18);


        /** CREATION QUESTION MULTIPLE **/
        $question6 = new Question();
        $question6 -> setType($typemulti) ->setIntitule("Jusqu'à combien mettez vous par mois dans les cosmétiques ?") ;
        $manager->persist($question6);

        $reponse19 = new Reponse();
        $reponse19 -> setReponse("Moins de 10€")->setQuestion($question6);
        $manager->persist($reponse19);

        $reponse20 = new Reponse();
        $reponse20 -> setReponse("Entre 10€ et 50€")->setQuestion($question6);
        $manager->persist($reponse20);

        $reponse21 = new Reponse();
        $reponse21 -> setReponse("Plus de 50€")->setQuestion($question6);
        $manager->persist($reponse21);


        /** CREATION QUESTION OUI/NON **/

        $question6 = new Question();
        $question6 -> setType($typeon) ->setIntitule("Aimeriez-vous recevoir des échantillons de nos nouveaux produits ?") ;
        $manager->persist($question6);

        $reponse22 = new Reponse();
        $reponse22 -> setReponse("Oui")->setQuestion($question6);
        $manager->persist($reponse22);

        $reponse23 = new Reponse();
        $reponse23 -> setReponse("Non")->setQuestion($question6);
        $manager->persist($reponse23);


        /** CREATION USERS**/

        $user = new Utilisateur();
        $user ->setNom($faker->name) ->setPrenom($faker->firstName) ->setGenre("M") ->setLogin("admin")
            -> setPassword($this->passwordHasher->hashPassword($user, "admin")) ->setVille($faker->city) ->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $user1 = new Utilisateur();
        $user1 ->setNom($faker->name) ->setPrenom($faker->firstName) ->setGenre("M")->setLogin("tristan")
            -> setPassword($this->passwordHasher->hashPassword($user1, "tristan")) ->setVille($faker->city);
        $manager->persist($user1);



        /** CREATION SONDAGES **/
        $sondage1 = new Sondage();
        $sondage1 -> setAdministrateur($user) ->setTheme($theme)->setNom($faker->name) ->setIntroduction($faker ->sentence) ->setDatecreation(new \DateTime('now'))
            ->setVisibilite(true) ->addQuestion($questionbis)->addQuestion($question1)->addQuestion($question5);
        $manager->persist($sondage1);

        $sondage2 = new Sondage();
        $sondage2 -> setAdministrateur($user) ->setTheme($theme)->setNom($faker->name) ->setIntroduction($faker ->sentence) ->setDatecreation(new \DateTime('now'))
            ->setVisibilite(true)->addQuestion($question2)->addQuestion($question3)->addQuestion($question6);
        $manager->persist($sondage2);

        $sondage3 = new Sondage();
        $sondage3 -> setAdministrateur($user) ->setTheme($theme)->setNom($faker->name) ->setIntroduction($faker ->sentence) ->setDatecreation(new \DateTime('now'))
            ->setVisibilite(true)->addQuestion($question)->addQuestion($question4);
        $manager->persist($sondage3);

        $statistique = new Statistique();
        $statistique->setTitre("reponse en focntion des -24ans")->setFormat($format)->setSondage($sondage1)->addCritere($critere);
        $manager->persist($statistique);

        $manager->flush();
    }
}
