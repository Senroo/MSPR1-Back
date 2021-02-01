<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotificationsController extends AbstractController
{
    /**
     * @Route("/admin-panel/notifications", name="notifications")
     * @param NotificationRepository $repository
     * @return Response
     */
    public function index(NotificationRepository $repository): Response
    {
        $notifications = $repository->findAllOrderedBy("release_date");

        return $this->render('notifications/index.html.twig', [
            'notifications' => $notifications,
        ]);
    }
}
