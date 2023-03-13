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

class EntityFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


    }
}
