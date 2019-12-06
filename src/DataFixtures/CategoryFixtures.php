<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $painting = new Category();
        $painting->setLabel("Painting");
        $manager->persist($painting);
        $this->setReference("cat-painting", $painting);

        $model = new Category();
        $model->setLabel("Model");
        $manager->persist($model);
        $this->setReference("cat-model", $model);

        $miniature = new Category();
        $miniature->setLabel("Miniature");
        $manager->persist($miniature);
        $this->setReference("cat-miniature", $miniature);

        $manager->flush();
    }
}
