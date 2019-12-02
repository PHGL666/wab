<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BuilderController extends AbstractController
{
    /** 
     * @Route("/", name="home")
     */
    public function home() 
    {
        return $this->render('builder/home.html.twig', [
            'controller_name' => 'BuilderController',
        ]);
    }

    /**
     * @Route("/wab-project", name="wab-project")
     */
    public function wab_project()
    {
        return $this->render('builder/wab-project.html.twig', [
            'controller_name' => 'BuilderController',
        ]);
    }

    /**
     * @Route("/builder", name="builder")
     */
    public function index()
    {
        return $this->render('builder/index.html.twig', [
            'controller_name' => 'BuilderController',
        ]);
    }
}
