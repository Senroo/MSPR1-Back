<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Service\ImgUploader;
use App\Form\ArtistType;
use App\Repository\ArtistRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

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

    /**
     * @Route("/admin-panel/artistes/ajouter", name="artists_add")
     * @param Request $request
     * @param ImgUploader $ImgUploader
     * @return Response
     */
    public function addArtist(Request $request, ImgUploader $ImgUploader): Response
    {
        $artist = new Artist();
        $form = $this->createForm(ArtistType::class, $artist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $artist->setName($form->get('name')->getData());
            $artist->setDescription($form->get('description')->getData());
            $artist->setMusicGroup($form->get('group')->getData());
            $artist->setGenre($form->get('genre')->getData());
            $imgNewName = $ImgUploader->upload($form->get('picture')->getData(), "artists");
            $artist->setPicture($imgNewName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($artist);
            $entityManager->flush();

            return $this->redirectToRoute('app_artists');
        }

        return $this->render('artists/add.html.twig', [
            'artistAddForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/artistes/modifier/{id}", name="artists_edit")
     * @param Request $request
     * @param Artist $artist
     * @param ImgUploader $ImgUploader
     * @return Response
     */
    public function editArtist(Request $request, Artist $artist, ImgUploader $ImgUploader): Response
    {
        $form = $this->createForm(ArtistType::class, $artist);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $artist->setName($form->get('name')->getData());
            $artist->setDescription($form->get('description')->getData());
            $artist->setMusicGroup($form->get('group')->getData());
            $artist->setGenre($form->get('genre')->getData());
            $imgNewName = $ImgUploader->upload($form->get('picture')->getData(), "artists");
            $artist->setPicture($imgNewName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($artist);
            $entityManager->flush();

            return $this->redirectToRoute('app_artists');
        }

        return $this->render('artists/edit.html.twig', [
            'artistEditForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-panel/artistes/supprimer/{id}", name="artists_delete")
     * @param ArtistRepository $repository
     * @param Request $request
     * @return Response
     */
    public function removeArtist(ArtistRepository $repository, Request $request): Response
    {
        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $artist = $repository->findOneBy(array('id' => $id));
        $em->remove($artist);
        $em->flush();

        return $this->redirectToRoute('app_artists');
    }
}
