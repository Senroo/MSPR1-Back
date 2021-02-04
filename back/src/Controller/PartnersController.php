<?php

namespace App\Controller;

use App\Entity\Partner;
use App\Service\ImgUploader;
use App\Form\PartnerType;
use App\Repository\PartnerRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Twig\Extra\String\StringExtension;

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

    /**
     * @Route("/admin-panel/partenaires/ajouter", name="partners_add")
     * @param Request $request
     * @param ImgUploader $ImgUploader
     * @return Response
     */
    public function addPartner(Request $request, ImgUploader $ImgUploader): Response
    {
        $partner = new Partner();
        $form = $this->createForm(PartnerType::class, $partner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $partner->setName($form->get('name')->getData());
            $partner->setDescription($form->get('description')->getData());
            $imgNewName = $ImgUploader->upload($form->get('logo')->getData(), "partners");
            $partner->setLogo($imgNewName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partner);
            $entityManager->flush();

            return $this->redirectToRoute('app_partners');
        }

        return $this->render('partners/add.html.twig', [
            'partnerAddForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/partenaires/modifier/{id}", name="partners_edit")
     * @param Request $request
     * @param Partner $partner
     * @param ImgUploader $ImgUploader
     * @return Response
     */
    public function editPartner(Request $request, Partner $partner, ImgUploader $ImgUploader): Response
    {
        $form = $this->createForm(PartnerType::class, $partner);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $partner->setName($form->get('name')->getData());
            $partner->setDescription($form->get('description')->getData());
            $imgNewName = $ImgUploader->upload($form->get('logo')->getData(), "partners");
            $partner->setLogo($imgNewName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partner);
            $entityManager->flush();

            return $this->redirectToRoute('app_partners');
        }

        return $this->render('partners/edit.html.twig', [
            'partnerEditForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/partenaires/supprimer/{id}", name="partners_delete")
     * @param PartnerRepository $repository
     * @param Request $request
     * @return Response
     */
    public function removePartner(PartnerRepository $repository, Request $request): Response
    {
        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $partner = $repository->findOneBy(array('id' => $id));
        $em->remove($partner);
        $em->flush();

        return $this->redirectToRoute('app_partners');
    }
}
