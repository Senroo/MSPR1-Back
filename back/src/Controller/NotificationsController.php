<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Form\NotificationType;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/admin-panel/notifications/ajouter", name="notifications_add")
     * @param Request $request
     * @return Response
     */
    public function addNotification(Request $request): Response
    {
        $notification = new Notification();
        $form = $this->createForm(NotificationType::class, $notification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $notification->setTitle($form->get('title')->getData());
            $notification->setMessage($form->get('message')->getData());
            $notification->setUrgencyLevel($form->get('urgency')->getData());
            $notification->setReleaseDate($form->get('date')->getData());
            $notification->setDuration($form->get('duration')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($notification);
            $entityManager->flush();

            return $this->redirectToRoute('app_notifications');
        }

        return $this->render('notifications/add.html.twig', [
            'notificationAddForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/notifications/modifier/{id}", name="notifications_edit")
     * @param Request $request
     * @param Notification $notification
     * @return Response
     */
    public function editNotification(Request $request,Notification $notification): Response
    {
        $form = $this->createForm(NotificationType::class, $notification);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $notification->setTitle($form->get('title')->getData());
            $notification->setMessage($form->get('message')->getData());
            $notification->setUrgencyLevel($form->get('urgency')->getData());
            $notification->setReleaseDate($form->get('date')->getData());
            $notification->setDuration($form->get('duration')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($notification);
            $entityManager->flush();

            return $this->redirectToRoute('app_notifications');
        }

        return $this->render('notifications/edit.html.twig', [
            'notificationEditForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/notifications/supprimer/{id}", name="notifications_delete")
     * @param NotificationRepository $repository
     * @param Request $request
     * @return Response
     */
    public function removeNotification(NotificationRepository $repository, Request $request): Response
    {
        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $notification = $repository->findOneBy(array('id' => $id));
        $em->remove($notification);
        $em->flush();

        return $this->redirectToRoute('app_notifications');
    }
}
