<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotificationsController extends AbstractController
{
    /**
     * @Route("/admin-panel/notifications", name="notifications")
     */
    public function index(): Response
    {
        return $this->render('notifications/index.html.twig', [
            'controller_name' => 'NotificationsController',
        ]);
    }
}
