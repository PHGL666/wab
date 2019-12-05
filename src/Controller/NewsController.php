<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     */
    public function news()
    {
        return $this->render('news/news.html.twig', [
            'controller_name' => 'NewsController',
            'title' => "Les dernières nouveautés du WAB"
        ]);
    }

    /** 
     * @Route("/news/12", name="news_show")
     */
    public function show()
    {
        return $this->render('news/show.html.twig');
    }

}
