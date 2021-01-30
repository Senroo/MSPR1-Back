<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPanelController extends AbstractController
{
    /**
     * @Route("/admin-panel", name="admin-panel")
     */
    public function index(): Response
    {
        return $this->render('admin-panel/index.html.twig', [
            'controller_name' => 'AdminPanelController',
        ]);
    }
}
