<?php

namespace App\DataFixtures;

use App\Entity\Circuit;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Service\FakeMaker;
use Faker;

class TourneeFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        $fakeMaker= new FakeMaker();
        $slugify = new Slugify();

        for ($ind = 1; $ind <= 10; $ind++) {
            $circuit = new Circuit();
            $circuit->setDatePresentation($faker->dateTimeThisCentury);
            $circuit->setPlaces(200);
            $circuit->setAdresse01($faker->streetAddress);
            $circuit->setCodepostal($faker->postcode);
            $circuit->setVille($faker->city);
            $circuit->setResume($fakeMaker->fakeArticle(1));
            $circuit->setActif(true);
            $circuit->setLatitude(48.574093);
            $circuit->setLongitude(7.7622913);
            $circuit->setSlug($slugify->slugify($circuit->getDatePresentation()->format('Y-m-d').'-'.$circuit->getVille()));
            $manager->persist($circuit);
        }

        for ($ind = 1; $ind <= 30; $ind++) {
            $circuit = new Circuit();
            $circuit->setDatePresentation($faker->dateTimeThisCentury);
            $circuit->setPlaces(200);
            $circuit->setAdresse01($faker->streetAddress);
            $circuit->setCodepostal($faker->postcode);
            $circuit->setVille($faker->city);
            $circuit->setResume($fakeMaker->fakeArticle(1));
            $circuit->setActif(false);
            $circuit->setLatitude(48.574093);
            $circuit->setLongitude(7.7622913);
            $circuit->setSlug($slugify->slugify($circuit->getDatePresentation()->format('Y-m-d').'-'.$circuit->getVille()));
            $manager->persist($circuit);
        }

        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getOrder()
    {
        return 3;
    }
}
