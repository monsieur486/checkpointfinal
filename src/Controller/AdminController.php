<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/administration")
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="administration")
     * @IsGranted("ROLE_ADMIN")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'activePage' => 'admin',
        ]);
    }

    /**
     * @Route("/tarifs", name="BOTarifs")
     * @IsGranted("ROLE_ADMIN")
     */
    public function tarifs()
    {
        return $this->render('admin/tarif.html.twig', [
            'activePage' => 'admin',
        ]);
    }

    /**
     * @Route("/circuit", name="BOCircuit")
     * @IsGranted("ROLE_ADMIN")
     */
    public function circuit()
    {
        return $this->render('admin/circuit.html.twig', [
            'activePage' => 'admin',
        ]);
    }

    /**
     * @Route("/programme", name="BOProgramme")
     * @IsGranted("ROLE_ADMIN")
     */
    public function programme()
    {
        return $this->render('admin/programme.html.twig', [
            'activePage' => 'admin',
        ]);
    }

    /**
     * @Route("/wilder", name="BOWilder")
     * @IsGranted("ROLE_ADMIN")
     */
    public function wilder()
    {
        return $this->render('admin/programme.html.twig', [
            'activePage' => 'admin',
        ]);
    }
}
