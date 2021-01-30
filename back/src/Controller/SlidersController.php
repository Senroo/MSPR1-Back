<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SlidersController extends AbstractController
{
    /**
     * @Route("/admin-panel/carousels", name="sliders")
     */
    public function index(): Response
    {
        return $this->render('sliders/index.html.twig', [
            'controller_name' => 'SlidersController',
        ]);
    }
}
