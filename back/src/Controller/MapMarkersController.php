<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapMarkersController extends AbstractController
{
    /**
     * @Route("/admin-panel/marqueurs-carte", name="map_markers")
     */
    public function index(): Response
    {
        return $this->render('map_markers/index.html.twig', [
            'controller_name' => 'MapMarkersController',
        ]);
    }
}
