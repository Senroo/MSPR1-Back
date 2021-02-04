<?php

namespace App\Controller;

use App\Entity\ArtistMeeting;
use App\Form\ArtistMeetingType;
use App\Repository\ArtistMeetingRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistMeetingsController extends AbstractController
{
    /**
     * @Route("/admin-panel/meetings-artistes", name="artist_meetings")
     * @param ArtistMeetingRepository $repository
     * @return Response
     */
    public function index(ArtistMeetingRepository $repository): Response
    {
        $artistsMeetings = $repository->findAllOrderedBy("date");

        return $this->render('artist_meetings/index.html.twig', [
            'artistsMeetings' => $artistsMeetings,
        ]);
    }

    /**
     * @Route("/admin-panel/meetings-artistes/ajouter", name="artist_meetings_add")
     * @param Request $request
     * @return Response
     */
    public function addArtistMeeting(Request $request): Response
    {
        $artistMeeting = new ArtistMeeting();
        $form = $this->createForm(ArtistMeetingType::class, $artistMeeting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $artistMeeting->setArtist($form->get('artist')->getData());
            $artistMeeting->setLocation($form->get('location')->getData());
            $artistMeeting->setDate($form->get('date')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($artistMeeting);
            $entityManager->flush();

            return $this->redirectToRoute('app_artist_meetings');
        }

        return $this->render('artist_meetings/add.html.twig', [
            'artistMeetingAddForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/meetings-artistes/modifier/{id}", name="artist_meetings_edit")
     * @param Request $request
     * @param ArtistMeeting $artistMeeting
     * @return Response
     */
    public function editArtistMeeting(Request $request, ArtistMeeting $artistMeeting): Response
    {
        $form = $this->createForm(ArtistMeetingType::class, $artistMeeting);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $artistMeeting->setArtist($form->get('artist')->getData());
            $artistMeeting->setLocation($form->get('location')->getData());
            $artistMeeting->setDate($form->get('date')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($artistMeeting);
            $entityManager->flush();

            return $this->redirectToRoute('app_artist_meetings');
        }

        return $this->render('artist_meetings/edit.html.twig', [
            'artistMeetingEditForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/meetings-artistes/supprimer/{id}", name="artist_meetings_delete")
     * @param ArtistMeetingRepository $repository
     * @param Request $request
     * @return Response
     */
    public function removeArtistMeeting(ArtistMeetingRepository $repository, Request $request): Response
    {
        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $artistMeeting = $repository->findOneBy(array('id' => $id));
        $em->remove($artistMeeting);
        $em->flush();

        return $this->redirectToRoute('app_artist_meetings');
    }
}
