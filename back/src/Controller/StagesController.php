<?php

namespace App\Controller;

use App\Entity\Stage;
use App\Form\StageType;
use App\Repository\StageRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/admin-panel/scenes/ajouter", name="stages_add")
     * @param Request $request
     * @return Response
     */
    public function addConcert(Request $request): Response
    {
        $stage = new Stage();
        $form = $this->createForm(StageType::class, $stage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $stage->setName($form->get('name')->getData());
            $stage->setLocation($form->get('location')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($stage);
            $entityManager->flush();

            return $this->redirectToRoute('app_stages');
        }

        return $this->render('stages/add.html.twig', [
            'stageAddForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin-panel/scenes/modifier/{id}", name="stages_edit")
     * @param Request $request
     * @param Stage $stage
     * @return Response
     */
    public function editConcert(Request $request, Stage $stage): Response
    {
        $form = $this->createForm(StageType::class, $stage);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $stage->setName($form->get('name')->getData());
            $stage->setLocation($form->get('location')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($stage);
            $entityManager->flush();

            return $this->redirectToRoute('app_stages');
        }

        return $this->render('stages/edit.html.twig', [
            'stageEditForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/scenes/supprimer/{id}", name="stages_edit")
     * @param StageRepository $repository
     * @param Request $request
     * @return Response
     */
    public function removeConcert(StageRepository $repository, Request $request): Response
    {
        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $stage = $repository->findOneBy(array('id' => $id));
        $em->remove($stage);
        $em->flush();

        return $this->redirectToRoute('app_stages');
    }
}
