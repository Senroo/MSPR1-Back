<?php

namespace App\Controller;

use App\Entity\Slider;
use App\Repository\SliderRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SlidersController extends AbstractController
{
    /**
     * @Route("/admin-panel/carousels", name="sliders")
     * @param SliderRepository $repository
     * @return Response
     */
    public function index(SliderRepository $repository): Response
    {
        $slidersImgs = $repository->findAllOrderedBy("slider_id", "position");

        return $this->render('sliders/index.html.twig', [
            'sliders_imgs' => $slidersImgs,
        ]);
    }
}
