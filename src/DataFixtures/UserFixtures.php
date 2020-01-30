<?php

namespace App\DataFixtures;

use App\Entity\Tarif;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture implements OrderedFixtureInterface
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->passwordEncoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $userSite = new User();
        $userSite->setEmail('admin@wildcircus.com');
        $userSite->setRoles(['ROLE_ADMIN']);
        $userSite->setPassword($this->passwordEncoder->encodePassword($userSite, 'Mdp12345'));
        $manager->persist($userSite);

        $tarif = new Tarif();
        $tarif->setSemaineAdulte(5);
        $tarif->setSemaineEnfant(3.5);
        $tarif->setSemaineGroupe(4);
        $tarif->setWeekendAdulte(8);
        $tarif->setWeekendEnfant(4);
        $tarif->setWeekendGroupe(5);
        $manager->persist($tarif);

        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getOrder()
    {
        return 1;
    }
}
