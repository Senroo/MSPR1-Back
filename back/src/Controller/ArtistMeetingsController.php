<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistMeetingsController extends AbstractController
{
    /**
     * @Route("/admin-panel/meetings-artistes", name="artist_meetings")
     */
    public function index(): Response
    {
        return $this->render('artist_meetings/index.html.twig', [
            'controller_name' => 'ArtistMeetingsController',
        ]);
    }
}
