<?php

namespace App\Controller;


use App\Entity\Stage;
use App\Repository\StageRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StagesController extends AbstractController
{
    /**
     * @Route("/admin-panel/scenes", name="stages")
     * @param StageRepository $repository
     * @return Response
     */
    public function index(StageRepository $repository): Response
    {
        $stages = $repository->findAllOrderedBy("name");

        return $this->render('stages/index.html.twig', [
            'stages' => $stages,
        ]);
    }
}
