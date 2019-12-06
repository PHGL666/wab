<?php

namespace App\DataFixtures;

use App\Entity\Army;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArmyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $army1 = new Army();
        $army1->setName("Bretonnia");
        $army1->setLogo("thumb_b.png");
        $manager->persist($army1);
        $this->setReference("army_bretonnia", $army1);

        $army2 = new Army();
        $army2->setName("Vampire Counts");
        $army2->setLogo("thumb_cv.png");
        $manager->persist($army2);
        $this->setReference("army_vampirecounts", $army2);
        
        $army3 = new Army();
        $army3->setName("Deamons");
        $army3->setLogo("thumb_dl.png");
        $manager->persist($army3);
        $this->setReference("army_daemon", $army3);

        $army4 = new Army();
        $army4->setName("Empire");
        $army4->setLogo("thumb_e.png");
        $manager->persist($army4);
        $this->setReference("army_empire", $army4);

        $army5 = new Army();
        $army5->setName("Dark Elves");
        $army5->setLogo("thumb_en.png");
        $manager->persist($army5);
        $this->setReference("army_darkelves", $army5);

        $army6 = new Army();
        $army6->setName("Sylvester Elves");
        $army6->setLogo("thumb_es.png");
        $manager->persist($army6);
        $this->setReference("army_sylvanelves", $army6);

        $army7 = new Army();
        $army7->setName("Chaos");
        $army7->setLogo("thumb_gdc.png");
        $manager->persist($army7);
        $this->setReference("army_chaos", $army7);

        $army8 = new Army();
        $army8->setName("Beast Herds");
        $army8->setLogo("thumb_hb.png");
        $manager->persist($army8);
        $this->setReference("army_beastmen", $army8);

        $army9 = new Army();
        $army9->setName("High Elves");
        $army9->setLogo("thumb_he.png");
        $manager->persist($army9);
        $this->setReference("army_highelves", $army9);

        $army10 = new Army();
        $army10->setName("Lizard Men");
        $army10->setLogo("thumb_hl.png");
        $manager->persist($army10);
        $this->setReference("army_lizardmen", $army10);

        $army11 = new Army();
        $army11->setName("Dwarves");
        $army11->setLogo("thumb_n.png");
        $manager->persist($army11);
        $this->setReference("army_dwarves", $army11);

        $army12 = new Army();
        $army12->setName("Infernal Dwarves");
        $army12->setLogo("thumb_ni.png");
        $manager->persist($army12);
        $this->setReference("army_infernaldwarves", $army12);

        $army13 = new Army();
        $army13->setName("Ogers");
        $army13->setLogo("thumb_o.png");
        $manager->persist($army13);
        $this->setReference("army_ogers", $army13);

        $army14 = new Army();
        $army14->setName("Orcs & Gobs");
        $army14->setLogo("thumb_oeg.png");
        $manager->persist($army14);
        $this->setReference("army_orcs", $army14);

        $army15 = new Army();
        $army15->setName("Toomb Kings");
        $army15->setLogo("thumb_rdt.png");
        $manager->persist($army15);
        $this->setReference("army_toombkings", $army15);

        $army16 = new Army();
        $army16->setName("Skavens");
        $army16->setLogo("thumb_s.png");
        $manager->persist($army16);
        $this->setReference("army_skavens", $army2);

        $manager->flush();
    }
}
