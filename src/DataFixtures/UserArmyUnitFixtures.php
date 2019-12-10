<?php

namespace App\DataFixtures;

use App\Entity\UserArmyUnit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserArmyUnitFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $bretonnia1_list = new UserArmyUnit();
        $bretonnia1_list->setNumberOfUnit(10);
        $bretonnia1_list->setUserArmy($this->getReference("bretonnia-1"));
        $bretonnia1_list->setUnit($this->getReference("bretonnia_paladin"));
        $manager->persist($bretonnia1_list);
        $this->setReference("bretonnia-1-list", $bretonnia1_list);

        $bretonnia2_list = new UserArmyUnit();
        $bretonnia2_list->setNumberOfUnit(8);
        $bretonnia2_list->setUserArmy($this->getReference("bretonnia-2"));
        $bretonnia2_list->setUnit($this->getReference("bretonnia_duke", "bretonnia_paladin"));
        $manager->persist($bretonnia2_list);
        $this->setReference("bretonnia-2-list", $bretonnia2_list);

        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            UserArmyFixtures::class,
            UnitFixtures::class
        ];
    }


}
