<?php

namespace App\Controller;

use App\Entity\UserArmy;
use App\Form\UserArmyType;
use App\Repository\UserArmyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * @Route("/user/army")
 */
class UserArmyController extends AbstractController
{
    /**
     * @Route("/", name="user_army_index", methods={"GET"})
     */
    public function index(UserArmyRepository $userArmyRepository): Response
    {
        return $this->render('user_army/index.html.twig', [
            'user_armies' => $userArmyRepository->findByUser($this->getUser()),
        ]);
    }

    /**
     * @Route("/new", name="user_army_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $userArmy = new UserArmy();
        $form = $this->createForm(UserArmyType::class, $userArmy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($userArmy);
            $entityManager->flush();

            return $this->redirectToRoute('user_army_index');
        }

        return $this->render('user_army/new.html.twig', [
            'user_army' => $userArmy,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}", name="user_army_show", methods={"GET"})
     */
    public function show(UserArmy $userArmy): Response
    {
        if ($userArmy->getUser()->getId() != $this->getUser()->getId()) {
            throw new AccessDeniedException("Ce n'est pas votre armée");
        }

        return $this->render('user_army/show.html.twig', [
            'user_army' => $userArmy,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_army_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, UserArmy $userArmy): Response
    {
        $form = $this->createForm(UserArmyType::class, $userArmy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_army_index');
        }

        return $this->render('user_army/edit.html.twig', [
            'user_army' => $userArmy,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_army_delete", methods={"DELETE"})
     */
    public function delete(Request $request, UserArmy $userArmy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$userArmy->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($userArmy);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_army_index');
    }
}
