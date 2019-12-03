<?php

namespace App\DataFixtures;

use App\Entity\UnitCategoryHasUnitLimit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use InfiniteIterator;

class UnitCategoryHasUnitLimitFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // LESS THAN 1001 POINTS
        $lessThan1001Characters = new UnitCategoryHasUnitLimit();
        $lessThan1001Characters->setUnitCategory($this->getReference("characters"));
        $lessThan1001Characters->setUnitLimit($this->getReference("unit_limit"));
        $lessThan1001Characters->setMin(1);
        $lessThan1001Characters->setMax(2);
        $manager->persist($lessThan1001Characters);
        $this->setReference("lessThan1001Characters", $lessThan1001Characters);

        $lessThan1001Lord = new UnitCategoryHasUnitLimit();
        $lessThan1001Lord->setUnitCategory($this->getReference("character_lord"));
        $lessThan1001Lord->setUnitLimit($this->getReference("unit_limit"));
        $lessThan1001Lord->setMin(0);
        $lessThan1001Lord->setMax(0);
        $manager->persist($lessThan1001Lord);
        $this->setReference("lessThan1001Lord", $lessThan1001Lord);

        $lessThan1001Heroe = new UnitCategoryHasUnitLimit();
        $lessThan1001Heroe->setUnitCategory($this->getReference("character_heroe"));
        $lessThan1001Heroe->setUnitLimit($this->getReference("unit_limit"));
        $lessThan1001Heroe->setMin(1);
        $lessThan1001Heroe->setMax(2);
        $manager->persist($lessThan1001Heroe);
        $this->setReference("lessThan1001Heroe", $lessThan1001Heroe);

        $lessThan1001CoreUnit = new UnitCategoryHasUnitLimit();
        $lessThan1001CoreUnit->setUnitCategory($this->getReference("core_unit"));
        $lessThan1001CoreUnit->setUnitLimit($this->getReference("unit_limit"));
        $lessThan1001CoreUnit->setMin(1);
        $lessThan1001CoreUnit->setMax(50);
        $manager->persist($lessThan1001CoreUnit);
        $this->setReference("lessThan1001CoreUnit", $lessThan1001CoreUnit);

        $lessThan1001SpecialUnit = new UnitCategoryHasUnitLimit();
        $lessThan1001SpecialUnit->setUnitCategory($this->getReference("special_unit"));
        $lessThan1001SpecialUnit->setUnitLimit($this->getReference("unit_limit"));
        $lessThan1001SpecialUnit->setMin(0);
        $lessThan1001SpecialUnit->setMax(2);
        $manager->persist($lessThan1001SpecialUnit);
        $this->setReference("lessThan1001SpecialUnit", $lessThan1001SpecialUnit);

        $lessThan1001RareUnit = new UnitCategoryHasUnitLimit();
        $lessThan1001RareUnit->setUnitCategory($this->getReference("rare_unit"));
        $lessThan1001RareUnit->setUnitLimit($this->getReference("unit_limit"));
        $lessThan1001RareUnit->setMin(0);
        $lessThan1001RareUnit->setMax(1);
        $manager->persist($lessThan1001RareUnit);
        $this->setReference("lessThan1001RareUnit", $lessThan1001RareUnit);
        
        // LESS THAN 2000 POINTS
        $lessThan2000Characters = new UnitCategoryHasUnitLimit();
        $lessThan2000Characters->setUnitCategory($this->getReference("characters"));
        $lessThan2000Characters->setUnitLimit($this->getReference("unit_limit"));
        $lessThan2000Characters->setMin(1);
        $lessThan2000Characters->setMax(3);
        $manager->persist($lessThan2000Characters);
        $this->setReference("lessThan2000Characters", $lessThan2000Characters);

        $lessThan2000Lord = new UnitCategoryHasUnitLimit();
        $lessThan2000Lord->setUnitCategory($this->getReference("character_lord"));
        $lessThan2000Lord->setUnitLimit($this->getReference("unit_limit"));
        $lessThan2000Lord->setMin(0);
        $lessThan2000Lord->setMax(0);
        $manager->persist($lessThan2000Lord);
        $this->setReference("lessThan2000Lord", $lessThan2000Lord);

        $lessThan2000Heroe = new UnitCategoryHasUnitLimit();
        $lessThan2000Heroe->setUnitCategory($this->getReference("character_heroe"));
        $lessThan2000Heroe->setUnitLimit($this->getReference("unit_limit"));
        $lessThan2000Heroe->setMin(1);
        $lessThan2000Heroe->setMax(3);
        $manager->persist($lessThan2000Heroe);
        $this->setReference("lessThan2000Heroe", $lessThan2000Heroe);

        $lessThan2000CoreUnit = new UnitCategoryHasUnitLimit();
        $lessThan2000CoreUnit->setUnitCategory($this->getReference("core_unit"));
        $lessThan2000CoreUnit->setUnitLimit($this->getReference("unit_limit"));
        $lessThan2000CoreUnit->setMin(2);
        $lessThan2000CoreUnit->setMax(50);
        $manager->persist($lessThan2000CoreUnit);
        $this->setReference("lessThan2000CoreUnit", $lessThan2000CoreUnit);

        $lessThan2000SpecialUnit = new UnitCategoryHasUnitLimit();
        $lessThan2000SpecialUnit->setUnitCategory($this->getReference("special_unit"));
        $lessThan2000SpecialUnit->setUnitLimit($this->getReference("unit_limit"));
        $lessThan2000SpecialUnit->setMin(0);
        $lessThan2000SpecialUnit->setMax(3);
        $manager->persist($lessThan2000SpecialUnit);
        $this->setReference("lessThan2000SpecialUnit", $lessThan2000SpecialUnit);

        $lessThan2000RareUnit = new UnitCategoryHasUnitLimit();
        $lessThan2000RareUnit->setUnitCategory($this->getReference("rare_unit"));
        $lessThan2000RareUnit->setUnitLimit($this->getReference("unit_limit"));
        $lessThan2000RareUnit->setMin(0);
        $lessThan2000RareUnit->setMax(1);
        $manager->persist($lessThan2000RareUnit);
        $this->setReference("lessThan2000RareUnit", $lessThan2000RareUnit);

        // MORE THAN 2000 POINTS
        $moreThan2000Characters = new UnitCategoryHasUnitLimit();
        $moreThan2000Characters->setUnitCategory($this->getReference("characters"));
        $moreThan2000Characters->setUnitLimit($this->getReference("unit_limit"));
        $moreThan2000Characters->setMin(1);
        $moreThan2000Characters->setMax(4);
        $manager->persist($moreThan2000Characters);
        $this->setReference("moreThan2000Characters", $moreThan2000Characters);

        $moreThan2000Lord = new UnitCategoryHasUnitLimit();
        $moreThan2000Lord->setUnitCategory($this->getReference("character_lord"));
        $moreThan2000Lord->setUnitLimit($this->getReference("unit_limit"));
        $moreThan2000Lord->setMin(0);
        $moreThan2000Lord->setMax(1);
        $manager->persist($moreThan2000Lord);
        $this->setReference("moreThan2000Lord", $moreThan2000Lord);

        $moreThan2000Heroe = new UnitCategoryHasUnitLimit();
        $moreThan2000Heroe->setUnitCategory($this->getReference("character_heroe"));
        $moreThan2000Heroe->setUnitLimit($this->getReference("unit_limit"));
        $moreThan2000Heroe->setMin(0);
        $moreThan2000Heroe->setMax(4);
        $manager->persist($moreThan2000Heroe);
        $this->setReference("moreThan2000Heroe", $moreThan2000Heroe);

        $moreThan2000CoreUnit = new UnitCategoryHasUnitLimit();
        $moreThan2000CoreUnit->setUnitCategory($this->getReference("core_unit"));
        $moreThan2000CoreUnit->setUnitLimit($this->getReference("unit_limit"));
        $moreThan2000CoreUnit->setMin(3);
        $moreThan2000CoreUnit->setMax(50);
        $manager->persist($moreThan2000CoreUnit);
        $this->setReference("moreThan2000CoreUnit", $moreThan2000CoreUnit);

        $moreThan2000SpecialUnit = new UnitCategoryHasUnitLimit();
        $moreThan2000SpecialUnit->setUnitCategory($this->getReference("special_unit"));
        $moreThan2000SpecialUnit->setUnitLimit($this->getReference("unit_limit"));
        $moreThan2000SpecialUnit->setMin(0);
        $moreThan2000SpecialUnit->setMax(4);
        $manager->persist($moreThan2000SpecialUnit);
        $this->setReference("moreThan2000SpecialUnit", $moreThan2000SpecialUnit);

        $moreThan2000RareUnit = new UnitCategoryHasUnitLimit();
        $moreThan2000RareUnit->setUnitCategory($this->getReference("rare_unit"));
        $moreThan2000RareUnit->setUnitLimit($this->getReference("unit_limit"));
        $moreThan2000RareUnit->setMin(0);
        $moreThan2000RareUnit->setMax(2);
        $manager->persist($moreThan2000RareUnit);
        $this->setReference("moreThan2000RareUnit", $moreThan2000RareUnit);

        // MORE THAN 3000 POINTS
        $moreThan3000Characters = new UnitCategoryHasUnitLimit();
        $moreThan3000Characters->setUnitCategory($this->getReference("characters"));
        $moreThan3000Characters->setUnitLimit($this->getReference("unit_limit"));
        $moreThan3000Characters->setMin(1);
        $moreThan3000Characters->setMax(6);
        $manager->persist($moreThan3000Characters);
        $this->setReference("moreThan3000Characters", $moreThan3000Characters);

        $moreThan3000Lord = new UnitCategoryHasUnitLimit();
        $moreThan3000Lord->setUnitCategory($this->getReference("character_lord"));
        $moreThan3000Lord->setUnitLimit($this->getReference("unit_limit"));
        $moreThan3000Lord->setMin(0);
        $moreThan3000Lord->setMax(2);
        $manager->persist($moreThan3000Lord);
        $this->setReference("moreThan3000Lord", $moreThan3000Lord);

        $moreThan3000Heroe = new UnitCategoryHasUnitLimit();
        $moreThan3000Heroe->setUnitCategory($this->getReference("character_heroe"));
        $moreThan3000Heroe->setUnitLimit($this->getReference("unit_limit"));
        $moreThan3000Heroe->setMin(0);
        $moreThan3000Heroe->setMax(6);
        $manager->persist($moreThan3000Heroe);
        $this->setReference("moreThan3000Heroe", $moreThan3000Heroe);

        $moreThan3000CoreUnit = new UnitCategoryHasUnitLimit();
        $moreThan3000CoreUnit->setUnitCategory($this->getReference("core_unit"));
        $moreThan3000CoreUnit->setUnitLimit($this->getReference("unit_limit"));
        $moreThan3000CoreUnit->setMin(4);
        $moreThan3000CoreUnit->setMax(50);
        $manager->persist($moreThan3000CoreUnit);
        $this->setReference("moreThan3000CoreUnit", $moreThan3000CoreUnit);

        $moreThan3000SpecialUnit = new UnitCategoryHasUnitLimit();
        $moreThan3000SpecialUnit->setUnitCategory($this->getReference("special_unit"));
        $moreThan3000SpecialUnit->setUnitLimit($this->getReference("unit_limit"));
        $moreThan3000SpecialUnit->setMin(0);
        $moreThan3000SpecialUnit->setMax(5);
        $manager->persist($moreThan3000SpecialUnit);
        $this->setReference("moreThan3000SpecialUnit", $moreThan3000SpecialUnit);

        $moreThan3000RareUnit = new UnitCategoryHasUnitLimit();
        $moreThan3000RareUnit->setUnitCategory($this->getReference("rare_unit"));
        $moreThan3000RareUnit->setUnitLimit($this->getReference("unit_limit"));
        $moreThan3000RareUnit->setMin(0);
        $moreThan3000RareUnit->setMax(3);
        $manager->persist($moreThan3000RareUnit);
        $this->setReference("moreThan3000RareUnit", $moreThan3000RareUnit);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UnitLimitFixtures::class,
            UnitCategoryFixtures::class
        ];
    }

}

