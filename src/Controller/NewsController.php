<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     */
    public function index()
    {
        return $this->render('news/news.html.twig', [
            'controller_name' => 'NewsController',
        ]);
    }
}
