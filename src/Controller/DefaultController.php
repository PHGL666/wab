<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /** 
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /** 
     * @Route("/legal-notice", name="legal_notice")
     */
    public function legal_notice()
    {
        return $this->render('default/legal_notice.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /** 
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('default/contact.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
