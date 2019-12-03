<?php

namespace App\DataFixtures;

use App\Entity\UnitCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UnitCategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $characters = new UnitCategory();
        $characters->setName("Personnages");
        $manager->persist($characters);
        $this->setReference("characters", $characters);

        $lord = new UnitCategory();
        $lord->setName("Seigneurs");
        $manager->persist($lord);
        $this->setReference("character_lord", $lord);

        $heroe = new UnitCategory();
        $heroe->setName("Héros");
        $manager->persist($heroe);
        $this->setReference("character_heroe", $heroe);

        $core_unit = new UnitCategory();
        $core_unit->setName("Unités de Base");
        $manager->persist($core_unit);
        $this->setReference("core_unit", $core_unit);

        $special_unit = new UnitCategory();
        $special_unit->setName("Unités Specials");
        $manager->persist($unitCategory4);
        $this->setReference("special_unit", $special_unit);
        
        $rare_unit = new UnitCategory();
        $rare_unit->setName("Unités Rares");
        $manager->persist($rare_unit);
        $this->setReference("rare_unit", $rare_unit);

        $manager->flush();
    }
}