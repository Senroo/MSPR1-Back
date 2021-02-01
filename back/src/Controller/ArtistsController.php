<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Repository\ArtistRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistsController extends AbstractController
{
    /**
     * @Route("/admin-panel/artistes", name="artists")
     * @param ArtistRepository $repository
     * @return Response
     */
    public function index(ArtistRepository $repository): Response
    {
        $artists = $repository->findAllOrderedBy("name");

        return $this->render('artists/index.html.twig', [
            'artists' => $artists,
        ]);
    }
}
