<?php

namespace App\Controller;

use App\Repository\ActeurRepository;
use App\Repository\CauseRepository;
use App\Repository\DonateurRepository;
use App\Repository\FavoriActeurRepository;
use App\Repository\UserRepository;
use App\Repository\WilderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     * @param WilderRepository $wilderRepository
     * @return Response
     */
    public function index(WilderRepository $wilderRepository):Response
    {
        $wilders = $wilderRepository->findAll();
        return $this->render('main/index.html.twig', [
            'activePage' => 'main',
            'wilders'=> $wilders
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
     * @Route("/reservations", name="reservations")
     */
    public function reservation()
    {
        return $this->render('main/reservation.html.twig', [
            'activePage' => 'reservation',
        ]);
    }
}
