<?php

namespace App\Controller;

use App\Entity\Sites;
use App\Form\SitesType;
use App\Repository\SitesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/sites")
 * @isGranted("ROLE_USER")
 */
class SitesController extends AbstractController
{
    /**
     * @Route("/", name="sites_index", methods={"GET"})
     */
    public function index(SitesRepository $sitesRepository): Response
    {
        return $this->render('sites/index.html.twig', [
            'sites' => $sitesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="sites_new", methods={"GET","POST"})
     */
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $site = new Sites();
        $form = $this->createForm(SitesType::class, $site);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $image = $form->get('img')->getData();
            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();
                try {
                    $image->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}
                $site->setImg($newFilename);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($site);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('sites/new.html.twig', [
            'site' => $site,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sites_show", methods={"GET"})
     */
    public function show(Sites $site): Response
    {
        return $this->render('sites/show.html.twig', [
            'site' => $site,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="sites_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Sites $site): Response
    {
        $form = $this->createForm(SitesType::class, $site);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('sites/edit.html.twig', [
            'site' => $site,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sites_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Sites $site): Response
    {
        if ($this->isCsrfTokenValid('delete'.$site->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($site);
            $entityManager->flush();
        }

        return $this->redirectToRoute('home');
    }
}
