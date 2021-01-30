<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistsController extends AbstractController
{
    /**
     * @Route("/admin-panel/artistes", name="artists")
     */
    public function index(): Response
    {
        return $this->render('artists/index.html.twig', [
            'controller_name' => 'ArtistsController',
        ]);
    }
}
