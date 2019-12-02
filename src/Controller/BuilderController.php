<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BuilderController extends AbstractController
{
    /**
     * @Route("/builder", name="builder")
     */
    public function index()
    {
        return $this->render('builder/builder.html.twig', [
            'controller_name' => 'BuilderController',
        ]);
    }
}
