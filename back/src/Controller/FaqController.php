<?php

namespace App\Controller;

use App\Entity\Faq;
use App\Form\FaqType;
use App\Repository\FaqRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/admin-panel/faq/ajouter", name="faq_add")
     * @param Request $request
     * @return Response
     */
    public function addFaq(Request $request): Response
    {
        $faq = new Faq();
        $form = $this->createForm(FaqType::class, $faq);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $faq->setQuestion($form->get('question')->getData());
            $faq->setAnswer($form->get('answer')->getData());
            $faq->setCategory($form->get('category')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($faq);
            $entityManager->flush();

            return $this->redirectToRoute('app_faq');
        }

        return $this->render('faq/add.html.twig', [
            'faqAddForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/faq/modifier/{id}", name="faq_edit")
     * @param Request $request
     * @param Faq $faq
     * @return Response
     */
    public function editFaq(Request $request,Faq $faq): Response
    {
        $form = $this->createForm(FaqType::class, $faq);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $faq->setQuestion($form->get('question')->getData());
            $faq->setAnswer($form->get('answer')->getData());
            $faq->setCategory($form->get('category')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($faq);
            $entityManager->flush();

            return $this->redirectToRoute('app_faq');
        }

        return $this->render('faq/edit.html.twig', [
            'faqEditForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/faq/supprimer/{id}", name="faq_delete")
     * @param FaqRepository $repository
     * @param Request $request
     * @return Response
     */
    public function removeFaq(FaqRepository $repository, Request $request): Response
    {
        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $faq = $repository->findOneBy(array('id' => $id));
        $em->remove($faq);
        $em->flush();

        return $this->redirectToRoute('app_faq');
    }
}
