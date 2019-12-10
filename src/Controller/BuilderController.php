<?php

namespace App\Controller;

use App\Entity\UserArmy;
use App\Form\BuilderSelectType;
use App\Repository\ArmyRepository;
use App\Service\Slugger;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
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

    public function form(UserArmy $UserArmy = null, Request $request, Slugger $slugger, ObjectManager $manager) {
        if(!$UserArmy) {
            $UserArmy = new UserArmy();
        }

        // APPEL DU FORMULAIRE
        $form = $this->createForm(BuilderSelectType::class, $UserArmy);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $UserArmy->setSlug($slugger->slugify($UserArmy->getTitle()));

            $manager->persist($UserArmy);
            $manager->flush();

            return $this->redirectToRoute('composer', ['slug' => $UserArmy->getSlug()]);
        }

        return $this->render('builder/composer.html.twig', [
            'formBuilderSelectType' => $form->createView(),
            'editMode' => $UserArmy->getId() !== null
        ]);
    }
    /**
     * @Route("/builder/select", name="select")
     */
/*
    public function select(UserArmyRepository $repo)
    {
        $UserArmy = $repo->findAll();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        return $this->render('builder/select.html.twig', [
            'controller_name' => 'BuilderController',
            'title' => "Select your composition",
            'UserArmies' => $UserArmy
        ]);
    }
*/
