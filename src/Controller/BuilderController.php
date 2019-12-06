<?php

namespace App\Controller;
use App\Entity\Army;
use App\Repository\ArmyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BuilderController extends AbstractController
{
    /**
     * @Route("/builder", name="builder")
     */
    public function builder(ArmyRepository $repo)
    {
        $army = $repo->findAll();

        return $this->render('builder/builder.html.twig', [
            'controller_name' => 'BuilderController',
            'title' => "Select your army",
            'armies' => $army
        ]);
    }

/**
     * @Route("/builder/composer", name="builder")
     */
    public function builder(ArmyRepository $repo)
    {
        $army = $repo->findAll();

        return $this->render('builder/builder.html.twig', [
            'controller_name' => 'BuilderController',
            'title' => "Select your army",
            'armies' => $army
        ]);
    }

}
