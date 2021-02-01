<?php

namespace App\Controller;

use App\Entity\Partner;
use App\Repository\PartnerRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartnersController extends AbstractController
{
    /**
     * @Route("/admin-panel/partenaires", name="partners")
     * @param PartnerRepository $repository
     * @return Response
     */
    public function index(PartnerRepository $repository): Response
    {
        $partners = $repository->findAllOrderedBy("name");

        return $this->render('partners/index.html.twig', [
            'partners' => $partners,
        ]);
    }
}
