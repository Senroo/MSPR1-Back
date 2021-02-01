<?php

namespace App\Controller;

use App\Entity\Faq;
use App\Repository\FaqRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FaqController extends AbstractController
{
    /**
     * @Route("/admin-panel/faq", name="faq")
     * @param FaqRepository $repository
     * @return Response
     */
    public function index(FaqRepository $repository): Response
    {
        $faq = $repository->findAllOrderedBy("category");

        return $this->render('faq/index.html.twig', [
            'faq' => $faq,
        ]);
    }
}
