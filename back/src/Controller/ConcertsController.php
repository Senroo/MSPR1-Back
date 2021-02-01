<?php

namespace App\Controller;

use App\Entity\ConcertPlanning;
use App\Repository\ConcertPlanningRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConcertsController extends AbstractController
{
    /**
     * @Route("/admin-panel/concerts", name="concerts")
     * @param ConcertPlanningRepository $repository
     * @return Response
     */
    public function index(ConcertPlanningRepository $repository): Response
    {
        $concerts = $repository->findAllOrderedBy("start_date");

        return $this->render('concerts/index.html.twig', [
            'concerts' => $concerts,
        ]);
    }
}
