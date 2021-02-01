<?php

namespace App\Controller;

use App\Entity\ArtistMeeting;
use App\Repository\ArtistMeetingRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
