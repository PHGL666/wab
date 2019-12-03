<?php

namespace App\DataFixtures;

use App\Entity\UnitLimit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UnitLimitFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $unitLimit = new UnitLimit();
        $unitLimit->setMin(0);
        $unitLimit->setMax(6);
        $manager->persist($unitLimit);
        $this->setReference("unit_limit", $unitLimit);

        $manager->flush();
    }
}
