<?php

namespace App\Controller;

use App\Entity\Timeline;
use App\Form\TimelineType;
use App\Repository\TimelineRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/timeline")
 * @isGranted("ROLE_USER")
 */
class TimelineController extends AbstractController
{
    /**
     * @Route("/", name="timeline_index", methods={"GET"})
     */
    public function index(TimelineRepository $timelineRepository): Response
    {
        return $this->render('timeline/index.html.twig', [
            'timelines' => $timelineRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="timeline_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $timeline = new Timeline();
        $form = $this->createForm(TimelineType::class, $timeline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($timeline);
            $entityManager->flush();

            return $this->redirect(
                $this->generateUrl('home') . '#parcours'
            );
        }

        return $this->render('timeline/new.html.twig', [
            'timeline' => $timeline,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="timeline_show", methods={"GET"})
     */
    public function show(Timeline $timeline): Response
    {
        return $this->render('timeline/show.html.twig', [
            'timeline' => $timeline,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="timeline_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Timeline $timeline): Response
    {
        $form = $this->createForm(TimelineType::class, $timeline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirect(
                $this->generateUrl('home') . '#parcours'
            ); 
        }

        return $this->render('timeline/edit.html.twig', [
            'timeline' => $timeline,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="timeline_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Timeline $timeline): Response
    {
        if ($this->isCsrfTokenValid('delete'.$timeline->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($timeline);
            $entityManager->flush();
        }

            return $this->redirect(
                $this->generateUrl('home') . '#parcours'
            );
    }
}
