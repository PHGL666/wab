<?php

namespace App\DataFixtures;

use App\Entity\Unit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UnitFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // CHARACTER_LORD
        $unit1 = new Unit();
        $unit1->setName("Duke");
        $unit1->setSizeMin(1);
        $unit1->setSizeMax(1);
        $unit1->setCostPerFigure(110);
        $unit1->setArmy($this->getReference("army_bretonnia"));
        $unit1->setUnitCategory($this->getReference("character_lord", "characters"));
        $manager->persist($unit1);
        $this->setReference("bretonnia_duke", $unit1);

        $unit2 = new Unit();
        $unit2->setName("Prophetess");
        $unit2->setSizeMin(1);
        $unit2->setSizeMax(1);
        $unit2->setCostPerFigure(175);
        $unit2->setArmy($this->getReference("army_bretonnia"));
        $unit2->setUnitCategory($this->getReference("character_lord", "characters"));
        $manager->persist($unit2);
        $this->setReference("bretonnia_prophetess", $unit2);

        // CHARACTER_HEROE
        $unit3 = new Unit();
        $unit3->setName("Paladin");
        $unit3->setSizeMin(1);
        $unit3->setSizeMax(1);
        $unit3->setCostPerFigure(75);
        $unit3->setArmy($this->getReference("army_bretonnia"));
        $unit3->setUnitCategory($this->getReference("character_heroe", "characters"));
        $manager->persist($unit3);
        $this->setReference("bretonnia_paladin", $unit3);

        $unit4 = new Unit();
        $unit4->setName("Lady");
        $unit4->setSizeMin(1);
        $unit4->setSizeMax(1);
        $unit4->setCostPerFigure(65);
        $unit4->setArmy($this->getReference("army_bretonnia"));
        $unit4->setUnitCategory($this->getReference("character_heroe", "characters"));
        $manager->persist($unit4);
        $this->setReference("bretonnia_lady", $unit4);

        $unit5 = new Unit();
        $unit5->setName("Captain");
        $unit5->setSizeMin(1);
        $unit5->setSizeMax(1);
        $unit5->setCostPerFigure(35);
        $unit5->setArmy($this->getReference("army_bretonnia"));
        $unit5->setUnitCategory($this->getReference("character_heroe", "characters"));
        $manager->persist($unit5);
        $this->setReference("bretonnia_captain", $unit5);

        // CORE_UNIT
        $unit6 = new Unit();
        $unit6->setName("Men at Arms");
        $unit6->setSizeMin(20);
        $unit6->setSizeMax(50);
        $unit6->setCostPerFigure(5);
        $unit6->setArmy($this->getReference("army_bretonnia"));
        $unit6->setUnitCategory($this->getReference("core_unit"));
        $manager->persist($unit6);
        $this->setReference("bretonnia_menAtArms", $unit6);

        $unit7 = new Unit();
        $unit7->setName("Realm Knights");
        $unit7->setSizeMin(5);
        $unit7->setSizeMax(21);
        $unit7->setCostPerFigure(23);
        $unit7->setArmy($this->getReference("army_bretonnia"));
        $unit7->setUnitCategory($this->getReference("core_unit"));
        $manager->persist($unit7);
        $this->setReference("bretonnia_realKnights", $unit7);

        $unit8 = new Unit();
        $unit8->setName("Archers");
        $unit8->setSizeMin(10);
        $unit8->setSizeMax(40);
        $unit8->setCostPerFigure(6);
        $unit8->setArmy($this->getReference("army_bretonnia"));
        $unit8->setUnitCategory($this->getReference("core_unit"));
        $manager->persist($unit8);
        $this->setReference("bretonnia_archers", $unit8);

        // SPECIAL_UNIT
        $unit9 = new Unit();
        $unit9->setName("Quest Knights");
        $unit9->setSizeMin(5);
        $unit9->setSizeMax(21);
        $unit9->setCostPerFigure(25);
        $unit9->setArmy($this->getReference("army_bretonnia"));
        $unit9->setUnitCategory($this->getReference("special_unit"));
        $manager->persist($unit9);
        $this->setReference("bretonnia_questKnights", $unit9);

        $unit10 = new Unit();
        $unit10->setName("Poachers");
        $unit10->setSizeMin(5);
        $unit10->setSizeMax(15);
        $unit10->setCostPerFigure(8);
        $unit10->setArmy($this->getReference("army_bretonnia"));
        $unit10->setUnitCategory($this->getReference("special_unit"));
        $manager->persist($unit10);
        $this->setReference("bretonnia_poachers", $unit10);

        // RARE_UNIT
        $unit11 = new Unit();
        $unit11->setName("Pegasus Knights");
        $unit11->setSizeMin(3);
        $unit11->setSizeMax(5);
        $unit11->setCostPerFigure(50);
        $unit11->setArmy($this->getReference("army_bretonnia"));
        $unit11->setUnitCategory($this->getReference("rare_unit"));
        $manager->persist($unit11);
        $this->setReference("bretonnia_pegasusKnights", $unit11);

        $unit12 = new Unit();
        $unit12->setName("Holy Knight");
        $unit12->setSizeMin(1);
        $unit12->setSizeMax(1);
        $unit12->setCostPerFigure(85);
        $unit12->setArmy($this->getReference("army_bretonnia"));
        $unit12->setUnitCategory($this->getReference("rare_unit"));
        $manager->persist($unit12);
        $this->setReference("bretonnia_holyKnight", $unit12);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ArmyFixtures::class,
            UnitCategoryFixtures::class
        ];
    }
}
