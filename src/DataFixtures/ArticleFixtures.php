<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Service\Slugger;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    private $slugger;

    /**
     * ArticleFixtures constructor.
     * @param $slugger
     */
    public function __construct(Slugger $slugger)
    {
        $this->slugger = $slugger;
    }

    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 4; $i++) {
            $article = new Article();
            $article->setTitle("Title of the article n°$i")
                ->setSlug($this->slugger->slugify($article->getTitle()))
                ->setCategory($this->getReference("cat-painting"))
                ->setContent("<p>Content of the article n°$i</p>")
                ->setImage("http://placehold.it/350x150")
                ->setCreatedAt(new \DateTime());
            $manager->persist($article);
        }
        for ($i = 1; $i <= 4; $i++) {
            $article = new Article();
            $article->setTitle("Title of the article n°$i")
                ->setSlug($this->slugger->slugify($article->getTitle()))
                ->setCategory($this->getReference("cat-modelism"))
                ->setContent("<p>Content of the article n°$i</p>")
                ->setImage("http://placehold.it/350x150")
                ->setCreatedAt(new \DateTime());
            $manager->persist($article);
        }
        for ($i = 1; $i <= 4; $i++) {
            $article = new Article();
            $article->setTitle("Title of the article n°$i")
                ->setSlug($this->slugger->slugify($article->getTitle()))
                ->setCategory($this->getReference("cat-miniature"))
                ->setContent("<p>Content of the article n°$i</p>")
                ->setImage("http://placehold.it/350x150")
                ->setCreatedAt(new \DateTime());
            $manager->persist($article);
        }
        $manager->flush();
    }

    /**
     * @return array
     */
    public function getDependencies()
    {
        return [
            CategoryFixtures::class
        ];
    }
}
