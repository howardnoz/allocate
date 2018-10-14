<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PersonRepository;
use App\Repository\TeamRepository;
use Symfony\Component\HttpFoundation\Response;

class AssignController extends AbstractController
{
    /**
     * @Route("/assign", name="assign")
     */
    public function index(PersonRepository $personRepository, TeamRepository $teamRepository): Response
    {
        return $this->render('assign/index.html.twig', [
            'controller_name' => 'AssignController',
            'people' => $personRepository->findAll(),
            'teams' => $teamRepository->findAll(),
        ]);
    }
}
