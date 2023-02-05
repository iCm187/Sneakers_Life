<?php

namespace App\Controller;

use App\Entity\Sneakers;
use App\Form\SneakersType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SneakersController extends AbstractController
{
    #[Route('/sneakers', name: 'app_sneakers_index')]
    public function index(): Response
    {
        return $this->render('sneakers/index.html.twig', [
            'controller_name' => 'SneakerController',
        ]);
    }

    #[Route('/{id}', name: 'app_sneakers_show', methods: ['GET'])]
    public function show(Sneakers $sneakers): Response
    {
        return $this->render('sneakers/show.html.twig', [
            'sneakers' => $sneakers,
        ]);
    }
}
