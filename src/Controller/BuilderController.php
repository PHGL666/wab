<?php

namespace App\Controller;
use App\Repository\ArmyRepository;
use App\Repository\UnitRepository;
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
     * @Route("/builder/select", name="select")
     */

    public function select(ArmyRepository $repo)
    {
        $army = $repo->findAll();

        return $this->render('builder/select.html.twig', [
            'controller_name' => 'BuilderController',
            'title' => "Select your composition",
            'armies' => $army
        ]);
    }
}
