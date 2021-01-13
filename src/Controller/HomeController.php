<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CompetencesRepository;
use App\Repository\TimelineRepository;
use App\Repository\SitesRepository;
use App\Entity\Competences;
use App\Entity\Timeline;
use App\Entity\Sites;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CompetencesRepository $competences, SitesRepository $sites, TimelineRepository $timeline): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'competences' => $competences->findAll(),
            'sites' => $sites->findAll(),
            'timeline' => $timeline->findAll(),
        ]);
    }
}
