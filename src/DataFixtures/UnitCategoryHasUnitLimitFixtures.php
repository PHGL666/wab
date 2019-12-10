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
        $lessThan1001Characters->setUnitLimit($this->getReference("ul_lessThan1001"));
        $lessThan1001Characters->setMin(1);
        $lessThan1001Characters->setMax(2);
        $manager->persist($lessThan1001Characters);
        $this->setReference("lessThan1001Characters", $lessThan1001Characters);

        $lessThan1001Lord = new UnitCategoryHasUnitLimit();
        $lessThan1001Lord->setUnitCategory($this->getReference("character_lord"));
        $lessThan1001Lord->setUnitLimit($this->getReference("ul_lessThan1001"));
        $lessThan1001Lord->setMin(0);
        $lessThan1001Lord->setMax(0);
        $manager->persist($lessThan1001Lord);
        $this->setReference("lessThan1001Lord", $lessThan1001Lord);

        $lessThan1001Heroe = new UnitCategoryHasUnitLimit();
        $lessThan1001Heroe->setUnitCategory($this->getReference("character_heroe"));
        $lessThan1001Heroe->setUnitLimit($this->getReference("ul_lessThan1001"));
        $lessThan1001Heroe->setMin(1);
        $lessThan1001Heroe->setMax(2);
        $manager->persist($lessThan1001Heroe);
        $this->setReference("lessThan1001Heroe", $lessThan1001Heroe);

        $lessThan1001CoreUnit = new UnitCategoryHasUnitLimit();
        $lessThan1001CoreUnit->setUnitCategory($this->getReference("core_unit"));
        $lessThan1001CoreUnit->setUnitLimit($this->getReference("ul_lessThan1001"));
        $lessThan1001CoreUnit->setMin(1);
        $lessThan1001CoreUnit->setMax(50);
        $manager->persist($lessThan1001CoreUnit);
        $this->setReference("lessThan1001CoreUnit", $lessThan1001CoreUnit);

        $lessThan1001SpecialUnit = new UnitCategoryHasUnitLimit();
        $lessThan1001SpecialUnit->setUnitCategory($this->getReference("special_unit"));
        $lessThan1001SpecialUnit->setUnitLimit($this->getReference("ul_lessThan1001"));
        $lessThan1001SpecialUnit->setMin(0);
        $lessThan1001SpecialUnit->setMax(2);
        $manager->persist($lessThan1001SpecialUnit);
        $this->setReference("lessThan1001SpecialUnit", $lessThan1001SpecialUnit);

        $lessThan1001RareUnit = new UnitCategoryHasUnitLimit();
        $lessThan1001RareUnit->setUnitCategory($this->getReference("rare_unit"));
        $lessThan1001RareUnit->setUnitLimit($this->getReference("ul_lessThan1001"));
        $lessThan1001RareUnit->setMin(0);
        $lessThan1001RareUnit->setMax(1);
        $manager->persist($lessThan1001RareUnit);
        $this->setReference("lessThan1001RareUnit", $lessThan1001RareUnit);
        
        // LESS THAN 2000 POINTS
        $lessThan2000Characters = new UnitCategoryHasUnitLimit();
        $lessThan2000Characters->setUnitCategory($this->getReference("characters"));
        $lessThan2000Characters->setUnitLimit($this->getReference("ul_lessThan2000"));
        $lessThan2000Characters->setMin(1);
        $lessThan2000Characters->setMax(3);
        $manager->persist($lessThan2000Characters);
        $this->setReference("lessThan2000Characters", $lessThan2000Characters);

        $lessThan2000Lord = new UnitCategoryHasUnitLimit();
        $lessThan2000Lord->setUnitCategory($this->getReference("character_lord"));
        $lessThan2000Lord->setUnitLimit($this->getReference("ul_lessThan2000"));
        $lessThan2000Lord->setMin(0);
        $lessThan2000Lord->setMax(0);
        $manager->persist($lessThan2000Lord);
        $this->setReference("lessThan2000Lord", $lessThan2000Lord);

        $lessThan2000Heroe = new UnitCategoryHasUnitLimit();
        $lessThan2000Heroe->setUnitCategory($this->getReference("character_heroe"));
        $lessThan2000Heroe->setUnitLimit($this->getReference("ul_lessThan2000"));
        $lessThan2000Heroe->setMin(1);
        $lessThan2000Heroe->setMax(3);
        $manager->persist($lessThan2000Heroe);
        $this->setReference("lessThan2000Heroe", $lessThan2000Heroe);

        $lessThan2000CoreUnit = new UnitCategoryHasUnitLimit();
        $lessThan2000CoreUnit->setUnitCategory($this->getReference("core_unit"));
        $lessThan2000CoreUnit->setUnitLimit($this->getReference("ul_lessThan2000"));
        $lessThan2000CoreUnit->setMin(2);
        $lessThan2000CoreUnit->setMax(50);
        $manager->persist($lessThan2000CoreUnit);
        $this->setReference("lessThan2000CoreUnit", $lessThan2000CoreUnit);

        $lessThan2000SpecialUnit = new UnitCategoryHasUnitLimit();
        $lessThan2000SpecialUnit->setUnitCategory($this->getReference("special_unit"));
        $lessThan2000SpecialUnit->setUnitLimit($this->getReference("ul_lessThan2000"));
        $lessThan2000SpecialUnit->setMin(0);
        $lessThan2000SpecialUnit->setMax(3);
        $manager->persist($lessThan2000SpecialUnit);
        $this->setReference("lessThan2000SpecialUnit", $lessThan2000SpecialUnit);

        $lessThan2000RareUnit = new UnitCategoryHasUnitLimit();
        $lessThan2000RareUnit->setUnitCategory($this->getReference("rare_unit"));
        $lessThan2000RareUnit->setUnitLimit($this->getReference("ul_lessThan2000"));
        $lessThan2000RareUnit->setMin(0);
        $lessThan2000RareUnit->setMax(1);
        $manager->persist($lessThan2000RareUnit);
        $this->setReference("lessThan2000RareUnit", $lessThan2000RareUnit);

        // LESS THAN 3000 POINTS
        $lessThan3000Characters = new UnitCategoryHasUnitLimit();
        $lessThan3000Characters->setUnitCategory($this->getReference("characters"));
        $lessThan3000Characters->setUnitLimit($this->getReference("ul_lessThan3000"));
        $lessThan3000Characters->setMin(1);
        $lessThan3000Characters->setMax(4);
        $manager->persist($lessThan3000Characters);
        $this->setReference("lessThan3000Characters", $lessThan3000Characters);

        $lessThan3000Lord = new UnitCategoryHasUnitLimit();
        $lessThan3000Lord->setUnitCategory($this->getReference("character_lord"));
        $lessThan3000Lord->setUnitLimit($this->getReference("ul_lessThan3000"));
        $lessThan3000Lord->setMin(0);
        $lessThan3000Lord->setMax(1);
        $manager->persist($lessThan3000Lord);
        $this->setReference("lessThan3000Lord", $lessThan3000Lord);

        $lessThan3000Heroe = new UnitCategoryHasUnitLimit();
        $lessThan3000Heroe->setUnitCategory($this->getReference("character_heroe"));
        $lessThan3000Heroe->setUnitLimit($this->getReference("ul_lessThan3000"));
        $lessThan3000Heroe->setMin(0);
        $lessThan3000Heroe->setMax(4);
        $manager->persist($lessThan3000Heroe);
        $this->setReference("lessThan3000Heroe", $lessThan3000Heroe);

        $lessThan3000CoreUnit = new UnitCategoryHasUnitLimit();
        $lessThan3000CoreUnit->setUnitCategory($this->getReference("core_unit"));
        $lessThan3000CoreUnit->setUnitLimit($this->getReference("ul_lessThan3000"));
        $lessThan3000CoreUnit->setMin(3);
        $lessThan3000CoreUnit->setMax(50);
        $manager->persist($lessThan3000CoreUnit);
        $this->setReference("lessThan3000CoreUnit", $lessThan3000CoreUnit);

        $lessThan3000SpecialUnit = new UnitCategoryHasUnitLimit();
        $lessThan3000SpecialUnit->setUnitCategory($this->getReference("special_unit"));
        $lessThan3000SpecialUnit->setUnitLimit($this->getReference("ul_lessThan3000"));
        $lessThan3000SpecialUnit->setMin(0);
        $lessThan3000SpecialUnit->setMax(4);
        $manager->persist($lessThan3000SpecialUnit);
        $this->setReference("lessThan3000SpecialUnit", $lessThan3000SpecialUnit);

        $lessThan3000RateUnit = new UnitCategoryHasUnitLimit();
        $lessThan3000RateUnit->setUnitCategory($this->getReference("rare_unit"));
        $lessThan3000RateUnit->setUnitLimit($this->getReference("ul_lessThan3000"));
        $lessThan3000RateUnit->setMin(0);
        $lessThan3000RateUnit->setMax(2);
        $manager->persist($lessThan3000RateUnit);
        $this->setReference("lessThan3000RateUnit", $lessThan3000RateUnit);

        // LESS THAN 4000 POINTS
        $lessThan4000Characters = new UnitCategoryHasUnitLimit();
        $lessThan4000Characters->setUnitCategory($this->getReference("characters"));
        $lessThan4000Characters->setUnitLimit($this->getReference("ul_lessThan4000"));
        $lessThan4000Characters->setMin(1);
        $lessThan4000Characters->setMax(6);
        $manager->persist($lessThan4000Characters);
        $this->setReference("lessThan4000Characters", $lessThan4000Characters);

        $lessThan4000Lord = new UnitCategoryHasUnitLimit();
        $lessThan4000Lord->setUnitCategory($this->getReference("character_lord"));
        $lessThan4000Lord->setUnitLimit($this->getReference("ul_lessThan4000"));
        $lessThan4000Lord->setMin(0);
        $lessThan4000Lord->setMax(2);
        $manager->persist($lessThan4000Lord);
        $this->setReference("lessThan4000Lord", $lessThan4000Lord);

        $lessThan4000Heroe = new UnitCategoryHasUnitLimit();
        $lessThan4000Heroe->setUnitCategory($this->getReference("character_heroe"));
        $lessThan4000Heroe->setUnitLimit($this->getReference("ul_lessThan4000"));
        $lessThan4000Heroe->setMin(0);
        $lessThan4000Heroe->setMax(6);
        $manager->persist($lessThan4000Heroe);
        $this->setReference("lessThan4000Heroe", $lessThan4000Heroe);

        $lessThan4000CoreUnit = new UnitCategoryHasUnitLimit();
        $lessThan4000CoreUnit->setUnitCategory($this->getReference("core_unit"));
        $lessThan4000CoreUnit->setUnitLimit($this->getReference("ul_lessThan4000"));
        $lessThan4000CoreUnit->setMin(4);
        $lessThan4000CoreUnit->setMax(50);
        $manager->persist($lessThan4000CoreUnit);
        $this->setReference("lessThan4000CoreUnit", $lessThan4000CoreUnit);

        $lessThan4000SpecialUnit = new UnitCategoryHasUnitLimit();
        $lessThan4000SpecialUnit->setUnitCategory($this->getReference("special_unit"));
        $lessThan4000SpecialUnit->setUnitLimit($this->getReference("ul_lessThan4000"));
        $lessThan4000SpecialUnit->setMin(0);
        $lessThan4000SpecialUnit->setMax(5);
        $manager->persist($lessThan4000SpecialUnit);
        $this->setReference("lessThan4000SpecialUnit", $lessThan4000SpecialUnit);

        $lessThan4000RareUnit = new UnitCategoryHasUnitLimit();
        $lessThan4000RareUnit->setUnitCategory($this->getReference("rare_unit"));
        $lessThan4000RareUnit->setUnitLimit($this->getReference("ul_lessThan4000"));
        $lessThan4000RareUnit->setMin(0);
        $lessThan4000RareUnit->setMax(3);
        $manager->persist($lessThan4000RareUnit);
        $this->setReference("lessThan4000RareUnit", $lessThan4000RareUnit);

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

