<?php

namespace App\DataFixtures;

use App\Entity\Abs;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AbsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $manager->persist(
            (new Abs())
        );
        $manager->persist(
            (new Abs())
                ->setName('Astier')
        );
        $manager->persist(
            (new Abs())
                ->setName('Astier')
                ->setDate1('12/05/2028')
                ->setType('conge paye')
        );
        $manager->persist(
            (new Abs())
                ->setName('Alexandre Astier')
                ->setDate1('2021-07-21')
        );
        $manager->persist(
            (new Abs())
                ->setName('Simon Astier')
                ->setDate1('21/07/19')
        );
        $manager->persist(
            (new Abs())
                ->setName('2')
                ->setDate1('2022/03/17')
                ->setType('RTT')
        );
        $manager->persist(
            (new Abs())
                ->setName('John Doe')
                ->setDate1('2021/05/19')
                ->setAm(true)
                ->setPm('1')
        );
        $manager->persist(
            (new Abs())
                ->setName('John Doe')
                ->setDate1('2021/06/21')
                ->setEnddate(new \DateTime('2021/07/03'))
                ->setAm(true)
                ->setPm('n')
                ->setType('ACPAYE')
        );
        $manager->persist(
            (new Abs())
                ->setName('John Doe')
                ->setDate1('2021/09/03')
                ->setEnddate(new \DateTime('2021/09/03'))
                ->setType('RDV médical matin')
        );

        $manager->flush();
    }
}
