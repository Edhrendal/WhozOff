<?php

namespace App\DataFixtures;

use App\Entity\Teamer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TeamerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $manager->persist(
            (new Teamer())
                ->setName('Alexandre Astier')
                ->setLastName('Astier')
                ->setFirstname('Alexandre')
                ->setFace('https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Alexandreastier.JPG/800px-Alexandreastier.JPG')
        );
        $manager->persist(
            (new Teamer())
                ->setName('Simon Astier')
                ->setLastName('Astier')
        );
        $manager->persist(
            (new Teamer())
                ->setName('Lionnel Astier')
                ->setLastName('Astier')
        );
        $manager->persist(
            (new Teamer())
                ->setName('John Doe')
                ->setLastName('Doe')
        );
        $manager->persist(
            (new Teamer())
                ->setName('John Doe')
                ->setLastName('Doe')
                ->setFirstname('John')
        );

        $manager->flush();
    }
}
