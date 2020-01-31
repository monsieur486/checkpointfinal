<?php

namespace App\DataFixtures;

use App\Entity\Wilder;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class WilderFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Laurent');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEIL9bCeyeOKg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=_5jnGLWyuQ-pXf_iSqm763Xx6fN4GqejQlFHpaVGqcM');
        $manager->persist($wilder);

        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getOrder()
    {
        return 4;
    }
}
