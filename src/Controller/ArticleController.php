<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function article(ArticleRepository $repo)
    {
        // $repo = $this->getDoctrine()->getRepository(Article::class); PAS BESOIN DE LA LIGNE CAR APPEL DU REPO ARTICLE EN PARAMETRE

        $article = $repo->findAll();

        return $this->render('article/article.html.twig', [
            'controller_name' => 'ArticleController',
            'title' => "Les dernières nouveautés du WAB",
            'articles' => $article
        ]);
    }
    
    /** 
     * @Route("/article/new", name="article_create")
     * @IsGranted("ROLE_ADMIN")
     */
    public function create() {
        return $this->render('article/create.html.twig');
    }

    /** 
     * @Route("/article/{id}", name="article_show")
     */
    //public function show(ArticleRepository $repo, $id)
    public function show(Article $article)
    {
        /* $repo = $this->getDoctrine()->getRepository(Article::class);  PAS BESOIN DE LA LIGNE CAR APPEL DU REPO ARTICLE EN PARAMETRE

        $article = $repo->find($id);
        */

        return $this->render('article/show.html.twig', [
            'article' => $article
        ]);
    }
}
