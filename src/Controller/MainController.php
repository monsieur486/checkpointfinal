<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'activePage' => 'main',
        ]);
    }

    /**
     * @Route("/programme", name="programme")
     */
    public function programme()
    {
        return $this->render('main/programme.html.twig', [
            'activePage' => 'programme',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('main/contact.html.twig', [
            'activePage' => 'contact',
        ]);
    }

    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation()
    {
        return $this->render('main/reservation.html.twig', [
            'activePage' => 'reservation',
        ]);
    }
}
