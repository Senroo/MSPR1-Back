<?php

namespace App\Controller;

use App\Entity\MapMarker;
use App\Form\MapMarkerType;
use App\Repository\MapMarkerRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapMarkersController extends AbstractController
{
    /**
     * @Route("/admin-panel/marqueurs-carte", name="map_markers")
     * @param MapMarkerRepository $repository
     * @return Response
     */
    public function index(MapMarkerRepository $repository): Response
    {
        $markers = $repository->findAllOrderedBy("type");

        return $this->render('map_markers/index.html.twig', [
            'markers' => $markers,
        ]);
    }

    /**
     * @Route("/admin-panel/marqueurs-carte/ajouter", name="map_markers_add")
     * @param Request $request
     * @return Response
     */
    public function addMapMarker(Request $request): Response
    {
        $mapMarker = new MapMarker();
        $form = $this->createForm(MapMarkerType::class, $mapMarker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $mapMarker->setName($form->get('name')->getData());
            $mapMarker->setDescription($form->get('description')->getData());
            $mapMarker->setLocation($form->get('location')->getData());
            $mapMarker->setType($form->get('type')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mapMarker);
            $entityManager->flush();

            return $this->redirectToRoute('app_map_markers');
        }

        return $this->render('map_markers/add.html.twig', [
            'mapMarkerAddForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/marqueurs-carte/modifier/{id}", name="map_markers_edit")
     * @param Request $request
     * @param MapMarker $mapMarker
     * @return Response
     */
    public function editMapMarker(Request $request,MapMarker $mapMarker): Response
    {
        $form = $this->createForm(MapMarkerType::class, $mapMarker);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $mapMarker->setName($form->get('name')->getData());
            $mapMarker->setDescription($form->get('description')->getData());
            $mapMarker->setLocation($form->get('location')->getData());
            $mapMarker->setType($form->get('type')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mapMarker);
            $entityManager->flush();

            return $this->redirectToRoute('app_map_markers');
        }

        return $this->render('map_markers/edit.html.twig', [
            'mapMarkerEditForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/marqueurs-carte/supprimer/{id}", name="map_markers_delete")
     * @param MapMarkerRepository $repository
     * @param Request $request
     * @return Response
     */
    public function removeMapMarker(MapMarkerRepository $repository, Request $request): Response
    {
        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $mapMarker = $repository->findOneBy(array('id' => $id));
        $em->remove($mapMarker);
        $em->flush();

        return $this->redirectToRoute('app_map_markers');
    }
}
