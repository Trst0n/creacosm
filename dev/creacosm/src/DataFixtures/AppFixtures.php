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

        $type = new Type();
        $type -> setType("question fermée");
        $manager->persist($type);

        $critere = new Critere();
        $critere -> setCritere("age");
        $manager->persist($critere);

        $theme = new Theme();
        $theme -> setTheme("cosmetique");
        $manager->persist($theme);

        $visuel = new Visuel();
        $visuel ->setVisuel("photo");
        $manager->persist($visuel);

        $format = new Format();
        $format->setFormat("diagramme");
        $manager->persist($format);

        $question = new Question();
        $question -> setType($type) ->setIntitule("oui ou non?") ->setVisuel($visuel);
        $manager->persist($question);

        $reponse = new Reponse();
        $reponse -> setReponse("oui")->setQuestion($question);
        $manager->persist($reponse);

        $user = new Utilisateur();
        $user ->setNom($faker->name) ->setPrenom($faker->firstName) ->setGenre("M") ->setLogin("azerty")
            -> setPassword($this->passwordHasher->hashPassword($user, "azerty")) ->setVille($faker->city);
        $manager->persist($user);

        $user1 = new Utilisateur();
        $user1 ->setNom($faker->name) ->setPrenom($faker->firstName) ->setGenre("M")->setLogin("tristan")
            -> setPassword($this->passwordHasher->hashPassword($user1, "tristan")) ->setVille($faker->city);
        $manager->persist($user1);

        $sondage = new Sondage();
        $sondage -> setCreateur($user) ->setNom($faker->name) ->setIntroduction($faker ->sentence) ->setDatecreation(new \DateTime('now')) ->setVisibilite(true);
        $manager->persist($sondage);

        $statistique = new Statistique();
        $statistique->setTitre("reponse en focntion des -24ans")->setFormat($format)->setSondage($sondage)->addCritere($critere);
        $manager->persist($statistique);

        $manager->flush();
    }
}
