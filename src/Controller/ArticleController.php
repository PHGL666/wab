<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function article()
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);

        $article = $repo->findAll();

        return $this->render('article/article.html.twig', [
            'controller_name' => 'ArticleController',
            'title' => "Les dernières nouveautés du WAB",
            'articles' => $article
        ]);
    }

    /** 
     * @Route("/article/{id}", name="article_show")
     */
    public function show($id)
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);

        $article = $repo->find($id);

        return $this->render('article/show.html.twig', [
            'article' => $article
        ]);
    }
}
