<?php

namespace App\Controller;

use App\Entity\UserArmy;
use App\Entity\UserArmyUnit;
use App\Form\BuilderSelectType;
use App\Repository\ArmyRepository;
use App\Repository\UserArmyRepository;
use App\Repository\UserArmyUnitRepository;
use App\Service\Slugger;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SelectController extends AbstractController
{
    /**
     * @Route("/army", name="select_army")
     */
    public function builder(ArmyRepository $repo)
    {
        $army = $repo->findAll();

        return $this->render('select/select_army.html.twig', [
            'controller_name' => 'SelectController',
            'title' => "Select your army",
            'armies' => $army
        ]);
    }

    /**
     * @Route("/army-list", name="army_list")
     * @param ArticleRepository $repo
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function armyList(UserArmyRepository $repo)
    {
        $userArmy = $repo->findAll();

        return $this->render('select/army_list.html.twig', [
            'controller_name' => 'SelectController',
            'title' => "Your armies",
            'userArmies' => $userArmy
        ]);
    }

    /**
     * @Route("/army/new", name="army_create")
     * @Route("/army/{slug}/edit", name="army_edit")
     */
    public function form(UserArmy $UserArmy = null, Request $request, Slugger $slugger, ObjectManager $manager)
    {

        if (!$UserArmy) {
            $UserArmy = new UserArmy();
        }

        // APPEL DU FORMULAIRE
        $form = $this->createForm(BuilderSelectType::class, $UserArmy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $UserArmy->setSlug($slugger->slugify($UserArmy->getName()));

            $manager->persist($UserArmy);
            $manager->flush();

            return $this->redirectToRoute('select_armyUnits', ['slug' => $UserArmy->getSlug()]);
            /*return $this->redirectToRoute('select_armyUnits');*/
        }

        return $this->render('select/create_army.html.twig', [
            'controller_name' => 'SelectController',
            'title' => "Select your composition",
            'SelectFormCompo' => $form->createView(),
            'editMode' => $UserArmy->getId() !== null
        ]);
    }

    /**
     * @Route("/army/{slug}", name="army_show")
     */
    public function show(UserArmy $userArmy)
    {
        return $this->render('select/army_show.html.twig', [
            'title' => "Army composition",
            'userArmy' => $userArmy
        ]);
    }
}
