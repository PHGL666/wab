<?php

namespace App\DataFixtures;

use App\Entity\UnitLimit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UnitLimitFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $min = new UnitLimit();
        $min->setMin(0);
        $manager->persist($min);
        $this->setReference("unit_limit_min", $min);

        $max = new UnitLimit();
        $max->setMax(6);
        $manager->persist($max);
        $this->setReference("unit_limit_max", $max);

        $manager->flush();
    }
}
