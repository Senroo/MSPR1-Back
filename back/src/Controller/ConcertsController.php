<?php

namespace App\Controller;

use App\Entity\Concert;
use App\Form\ConcertType;
use App\Repository\ConcertRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConcertsController extends AbstractController
{
    /**
     * @Route("/admin-panel/concerts", name="concerts")
     * @param ConcertRepository $repository
     * @return Response
     */
    public function index(ConcertRepository $repository): Response
    {
        $concerts = $repository->findAllOrderedBy("start_date");

        return $this->render('concerts/index.html.twig', [
            'concerts' => $concerts,
        ]);
    }

    /**
     * @Route("/admin-panel/concerts/ajouter", name="concerts_add")
     * @param Request $request
     * @return Response
     */
    public function addConcert(Request $request): Response
    {
        $concert = new Concert();
        $form = $this->createForm(ConcertType::class, $concert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $concert->setStage($form->get('stage')->getData());
            $concert->setName($form->get('name')->getData());
            $concert->setDescription($form->get('description')->getData());
            $concert->setGenre($form->get('genre')->getData());
            $concert->setArtist($form->get('artist')->getData());
            $concert->setStartDate($form->get('date')->getData());
            $concert->setDuration($form->get('duration')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($concert);
            $entityManager->flush();

            return $this->redirectToRoute('app_concerts');
        }

        return $this->render('concerts/add.html.twig', [
            'concertAddForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin-panel/concerts/modifier/{id}", name="concerts_edit")
     * @param Request $request
     * @param Concert $concert
     * @return Response
     */
    public function editConcert(Request $request,Concert $concert): Response
    {
        $form = $this->createForm(ConcertType::class, $concert);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $concert->setStage($form->get('stage')->getData());
            $concert->setName($form->get('name')->getData());
            $concert->setDescription($form->get('description')->getData());
            $concert->setGenre($form->get('genre')->getData());
            $concert->setArtist($form->get('artist')->getData());
            $concert->setStartDate($form->get('date')->getData());
            $concert->setDuration($form->get('duration')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($concert);
            $entityManager->flush();

            return $this->redirectToRoute('app_concerts');
        }

        return $this->render('concerts/edit.html.twig', [
            'concertEditForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin-panel/concerts/supprimer/{id}", name="concerts_delete")
     * @param ConcertRepository $repository
     * @param Request $request
     * @return Response
     */
    public function removeConcert(ConcertRepository $repository, Request $request): Response
    {
        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $concert = $repository->findOneBy(array('id' => $id));
        $em->remove($concert);
        $em->flush();

        return $this->redirectToRoute('app_concerts');
    }
}
