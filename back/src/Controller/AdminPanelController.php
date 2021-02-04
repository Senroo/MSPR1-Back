<?php

namespace App\Controller;

use App\Repository\StageRepository;
use App\Repository\ArtistRepository;
use App\Repository\ArtistMeetingRepository;
use App\Repository\ConcertRepository;
use App\Repository\FaqRepository;
use App\Repository\MapMarkerRepository;
use App\Repository\NotificationRepository;
use App\Repository\PartnerRepository;
use App\Repository\SliderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPanelController extends AbstractController
{
    /**
     * @Route("/admin-panel", name="admin-panel")
     * @param ArtistRepository $artistRepository
     * @param ArtistMeetingRepository $artistMeetingRepository
     * @param ConcertRepository $concertRepository
     * @param FaqRepository $faqRepository
     * @param MapMarkerRepository $mapMarkerRepository
     * @param NotificationRepository $notificationRepository
     * @param PartnerRepository $partnerRepository
     * @param SliderRepository $sliderRepository
     * @param StageRepository $stageRepository
     * @return Response
     */
    public function index(ArtistRepository $artistRepository, ArtistMeetingRepository $artistMeetingRepository, ConcertRepository $concertRepository,
                          FaqRepository $faqRepository, MapMarkerRepository $mapMarkerRepository, NotificationRepository $notificationRepository,
                          PartnerRepository $partnerRepository, SliderRepository $sliderRepository, StageRepository $stageRepository): Response
    {
        $card_content = [
            [
                "number" => $artistRepository->countAll(),
                "label" => 'Artistes',
                "color" => '#ea7878',
                "icon" => 'fas fa-music',
                "route" => 'app_artists'
            ],
            [
                "number" => $artistMeetingRepository->countAll(),
                "label" => 'Rencontres Artistes',
                "color" => '#f0b671',
                "icon" => 'fas fa-calendar-alt',
                "route" => 'app_artist_meetings'
            ],
            [
                "number" => $concertRepository->countAll(),
                "label" => 'Concerts',
                "color" => '#eaee56',
                "icon" => 'fas fa-guitar',
                "route" => 'app_concerts'
            ],
            [
                "number" => $faqRepository->countAll(),
                "label" => 'FAQ',
                "color" => '#93ee81',
                "icon" => 'fas fa-question-circle',
                "route" => 'app_faq'
            ],
            [
                "number" => $mapMarkerRepository->countAll(),
                "label" => 'Marqueurs Carte',
                "color" => '#6dd1db',
                "icon" => 'fas fa-map-marker-alt',
                "route" => 'app_map_markers'
            ],
            [
                "number" => $notificationRepository->countAll(),
                "label" => 'Notifications',
                "color" => '#87a9df',
                "icon" => 'fas fa-bell',
                "route" => 'app_notifications'
            ],
            [
                "number" => $partnerRepository->countAll(),
                "label" => 'Partenaires',
                "color" => '#a397e8',
                "icon" => 'fas fa-handshake',
                "route" => 'app_partners'
            ],
            [
                "number" => $sliderRepository->countAll(),
                "label" => 'Carousels',
                "color" => '#dd97dd',
                "icon" => 'fas fa-images',
                "route" => 'app_sliders'
            ],
            [
                "number" => $stageRepository->countAll(),
                "label" => 'Scènes',
                "color" => '#f055da',
                "icon" => 'fas fa-volume-up',
                "route" => 'app_stages'
            ],

        ];


        return $this->render('admin-panel/index.html.twig', [
            'controller_name' => 'AdminPanelController',
            'contents' => $card_content,
        ]);
    }
}
