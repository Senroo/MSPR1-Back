<?php

namespace App\Controller;

use App\Entity\MapMarker;
use App\Repository\MapMarkerRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
