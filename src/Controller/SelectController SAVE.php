<?php

namespace App\Controller;

use App\Entity\UserArmy;
use App\Entity\UserArmyUnit;
use App\Form\BuilderSelectType;
use App\Repository\ArmyRepository;
use App\Repository\UserArmyUnitRepository;
use App\Service\Slugger;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SelectController extends AbstractController
{
    /**
     * @Route("/select", name="select_army")
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
     * @Route("select/select-compo", name="select_compo")
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

            /*$UserArmy->setSlug($slugger->slugify($UserArmy->getName()));*/

            $manager->persist($UserArmy);
            $manager->flush();

            /*return $this->redirectToRoute('select_armyUnits', ['slug' => $UserArmy->getSlug()]);*/
            return $this->redirectToRoute('select_armyUnits');
        }

        return $this->render('select/select_compo.html.twig', [
            'controller_name' => 'SelectController',
            'title' => "Select your composition",
            'SelectFormCompo' => $form->createView(),
        ]);
    }

    /**
     * @Route("/select/select-units", name="select_armyUnits")
     */
    public function list(UserArmyUnitRepository $repo)
    {
        $userArmyUnit = $repo->findAll();

        return $this->render('select/select_armyUnits.html.twig', [
            'controller_name' => 'SelectController',
            'title' => "Select your units",
            'userArmyUnits' => $userArmyUnit
        ]);
    }
}
