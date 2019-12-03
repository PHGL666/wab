<?php

namespace App\DataFixtures;

use App\Entity\UserArmy;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserArmyFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $bretonnia1 = new UserArmy();
        $bretonnia1->setArmyPoints(1500);
        $bretonnia1->setArmy($this->getReference("army_bretonnia"));
        $bretonnia1->setUser($this->getReference("user-john"));
        $manager->persist($bretonnia1);
        $this->setReference("bretonnia-1", $bretonnia1);

        $bretonnia2 = new UserArmy();
        $bretonnia2->setArmyPoints(2500);
        $bretonnia2->setArmy($this->getReference("army_bretonnia"));
        $bretonnia2->setUser($this->getReference("user-admin"));
        $manager->persist($bretonnia2);
        $this->setReference("bretonnia-2", $bretonnia2);

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
            ArmyFixtures::class,
            UserFixtures::class
        ];
    }

}
