<?php

namespace App\Controller;

use App\Entity\Numero;
use App\Form\NumeroType;
use App\Repository\NumeroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/numero")
 */
class NumeroController extends AbstractController
{
    /**
     * @Route("/", name="numero_index", methods={"GET"})
     */
    public function index(NumeroRepository $numeroRepository): Response
    {
        return $this->render('numero/index.html.twig', [
            'numeros' => $numeroRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="numero_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $numero = new Numero();
        $form = $this->createForm(NumeroType::class, $numero);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($numero);
            $entityManager->flush();

            return $this->redirectToRoute('numero_index');
        }

        return $this->render('numero/new.html.twig', [
            'numero' => $numero,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="numero_show", methods={"GET"})
     */
    public function show(Numero $numero): Response
    {
        return $this->render('numero/show.html.twig', [
            'numero' => $numero,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="numero_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Numero $numero): Response
    {
        $form = $this->createForm(NumeroType::class, $numero);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('numero_index');
        }

        return $this->render('numero/edit.html.twig', [
            'numero' => $numero,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="numero_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Numero $numero): Response
    {
        if ($this->isCsrfTokenValid('delete'.$numero->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($numero);
            $entityManager->flush();
        }

        return $this->redirectToRoute('numero_index');
    }
}
