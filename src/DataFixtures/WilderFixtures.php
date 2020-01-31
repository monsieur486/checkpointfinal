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
        $wilder->setFirstName('Edouard');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQHUNK0T62SfQg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=eCA0atkwtGQ6AG8WYlyGYvmDMQyUbm6rEyAkw-LUW9k');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Cyrille');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C4E03AQExEFDZdrQo5Q/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=Pc7ePQj9Dcnm-JRP7Y2XWGL_uPTVoJbFrpK-xzxB9VU');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Emmanuelle');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C4D03AQGqRlXKxdbgNA/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=Gj8jmYOrFzSaz2rNWUkUUD5i13IVH-Q-0-0TdPtPelE');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Guillaume');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQHabuWFWFLz1A/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=LxMphoDl8bOaWESwezNrajui7nXLhCQawJCaaN24I3U');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Magomed');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEGjhCGQrWEIw/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=apFvVPtCwatxDuQzYYsx_JUCzRXLlcocodqFIaTVj6k');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Attila');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C4D03AQEiLFxCBDqB2Q/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=4XVbWBe2ZqRk2D2iK8H_59PDoK-8BHFuPTH_xJN9i5w');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Cem');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQHRtIeISCFuVw/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=JBQ4fD5ZNusb7u-2xPpqFCHpxC_OgjBj-QgUAn5XzYI');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Nicolas');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C4D03AQH9Kp7xyckOaw/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=xdg411hzCaaQLSbqNuUmZ6tLr0l-WPArq8RiAIaUpag');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Xavier');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C4D03AQEHruThTx1zcg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=r1tmIZ99rW_IwiOQqWJ2B3h12WLHgOS94Xg7XNJ7FjI');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Vo Vinh Nghi');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C4D03AQEFulwQAqnzLA/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=eWRUgBo2dp-7l-F8aVFV3Fmu2yYJuWDzOGSZWMcivS0');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Carmello');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C4E03AQGzGstp_D40uw/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=tXVM0dcFchqc7swl4-17l4gIuMpkrvEyKHFEk6fRs2I');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Delphine');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQENsF9lBqELEA/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=RVPrKm9PqNT8HDyFeqGbFlUrSXRCYqeyK26otCL8chk');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Aljo');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQGl-RsmFsV-rw/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=x7z2JyFtWwRjwQrTtFvA0_UHHOpgFgm-vFsb0WSUi3M');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Thomas');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C4D03AQEHsAEfY9myEg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=aHY-6-JdYVYDes8mHEpXKEJP5UbpFJaJtKyJNjurif4');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Sophie');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C4D03AQHjfZqnted0Xg/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=w8jS9_aztjgeQHLfDcJib5hgrJaPqepIlfghGCTelPc');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Jean-Marie');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQEHS1783JER2Q/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=rxAMI1A8KMDo-7ckEM5vHQ9WooicCRYBgJLuJ-VdJMU');
        $manager->persist($wilder);

        $wilder = new Wilder();
        $wilder->setFirstName('Corrine');
        $wilder->setImage('https://media-exp1.licdn.com/dms/image/C5603AQH4zhCyEep_IQ/profile-displayphoto-shrink_200_200/0?e=1585785600&v=beta&t=ERum6jKw0m9KSMLraadlzQezJvFnYkS6HxAFYvHdcvA');
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
