<?php

namespace App\Controller;

use App\Entity\Slider;
use App\Service\ImgUploader;
use App\Form\SliderImgType;
use App\Repository\SliderRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class SlidersController extends AbstractController
{
    /**
     * @Route("/admin-panel/carousels", name="sliders")
     * @param SliderRepository $repository
     * @return Response
     */
    public function index(SliderRepository $repository): Response
    {
        $slidersImgs = $repository->findAllOrderedBy("slider_name", "position");

        return $this->render('sliders/index.html.twig', [
            'sliders_imgs' => $slidersImgs,
        ]);
    }

    /**
     * @Route("/admin-panel/carousels/ajouter", name="sliders_add")
     * @param Request $request
     * @param ImgUploader $ImgUploader
     * @return Response
     */
    public function addSlider(Request $request, ImgUploader $ImgUploader): Response
    {
        $slider = new Slider();
        $form = $this->createForm(SliderImgType::class, $slider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $slider->setPosition($form->get('position')->getData());
            $slider->setSliderId($form->get('slider_name')->getData());
            $imgNewName = $ImgUploader->upload($form->get('picture')->getData(), "sliders");
            $slider->setPicture($imgNewName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($slider);
            $entityManager->flush();

            return $this->redirectToRoute('app_sliders');
        }

        return $this->render('sliders/add.html.twig', [
            'sliderAddForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/carousels/modifier/{id}", name="sliders_edit")
     * @param Request $request
     * @param Slider $slider
     * @param ImgUploader $ImgUploader
     * @return Response
     */
    public function editSlider(Request $request, Slider $slider, ImgUploader $ImgUploader): Response
    {
        $form = $this->createForm(SliderImgType::class, $slider);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $slider->setPosition($form->get('position')->getData());
            $slider->setSliderId($form->get('slider_name')->getData());
            $imgNewName = $ImgUploader->upload($form->get('picture')->getData(), "sliders");
            $slider->setPicture($imgNewName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($slider);
            $entityManager->flush();

            return $this->redirectToRoute('app_sliders');
        }

        return $this->render('sliders/edit.html.twig', [
            'sliderEditForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/carousels/supprimer/{id}", name="sliders_delete")
     * @param SliderRepository $repository
     * @param Request $request
     * @return Response
     */
    public function removeSlider(SliderRepository $repository, Request $request): Response
    {
        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $slider = $repository->findOneBy(array('id' => $id));
        $em->remove($slider);
        $em->flush();

        return $this->redirectToRoute('app_sliders');
    }
}
