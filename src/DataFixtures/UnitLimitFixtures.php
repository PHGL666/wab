<?php

namespace App\DataFixtures;

use App\Entity\UnitLimit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UnitLimitFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /*
        $unitLimit = new UnitLimit();
        $unitLimit->setMin(0);
        $unitLimit->setMax(6);
        $manager->persist($unitLimit);
        $this->setReference("unit_limit", $unitLimit);

        $unitLimitCharacter = new unitLimit();
        $unitLimitCharacter->setMin(0);
        $unitLimitCharacter->setMax(1001);
        $manager->persist($unitLimitCharacter);
        $this->setReference("ul_lessthan1001_character", $unitLimitCharacter);
        */

        $lessThan1001 = new unitLimit();
        $lessThan1001->setMin(0);
        $lessThan1001->setMax(1001);
        $manager->persist($lessThan1001);
        $this->setReference("ul_lessThan1001", $lessThan1001);

        $lessThan2000 = new unitLimit();
        $lessThan2000->setMin(1002);
        $lessThan2000->setMax(1999);
        $manager->persist($lessThan2000);
        $this->setReference("ul_lessThan2000", $lessThan2000);

        $lessThan3000 = new unitLimit();
        $lessThan3000->setMin(2000);
        $lessThan3000->setMax(2999);
        $manager->persist($lessThan3000);
        $this->setReference("ul_lessThan3000", $lessThan3000);

        $lessThan4000 = new unitLimit();
        $lessThan4000->setMin(3000);
        $lessThan4000->setMax(3999);
        $manager->persist($lessThan4000);
        $this->setReference("ul_lessThan4000", $lessThan4000);

        $manager->flush();
    }
}
