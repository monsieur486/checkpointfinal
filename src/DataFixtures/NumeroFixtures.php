<?php

namespace App\DataFixtures;

use App\Entity\Numero;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Service\FakeMaker;

class NumeroFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $fakeMaker= new FakeMaker();

        $numero = new Numero();
        $numero->setActif(true);
        $numero->setHoraire(DateTime::createFromFormat('H:m', "21:30"));
        $numero->setTitre('Clown en folie');
        $numero->setResume($fakeMaker->fakeArticle(3));
        $numero->setImage('/media/images/piste01.jpg');
        $manager->persist($numero);

        $numero = new Numero();
        $numero->setActif(true);
        $numero->setHoraire(DateTime::createFromFormat('H:m', "21:30"));
        $numero->setTitre('Les Trapésistes Fous');
        $numero->setResume($fakeMaker->fakeArticle(3));
        $numero->setImage('/media/images/piste01.jpg');
        $manager->persist($numero);

        $numero = new Numero();
        $numero->setActif(true);
        $numero->setHoraire(DateTime::createFromFormat('H:m', "21:30"));
        $numero->setTitre('Les Trapésistes Fous');
        $numero->setResume($fakeMaker->fakeArticle(3));
        $numero->setImage('/media/images/piste01.jpg');
        $manager->persist($numero);

        $numero = new Numero();
        $numero->setActif(true);
        $numero->setHoraire(DateTime::createFromFormat('H:m', "21:30"));
        $numero->setTitre('Jojo le Magicien');
        $numero->setResume($fakeMaker->fakeArticle(3));
        $numero->setImage('/media/images/piste01.jpg');
        $manager->persist($numero);

        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getOrder()
    {
        return 2;
    }
}
