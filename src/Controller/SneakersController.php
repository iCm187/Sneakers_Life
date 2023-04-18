<?php

namespace App\Controller;

use App\Entity\Sneakers;
use App\Repository\SneakersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SneakersController extends AbstractController
{
    #[Route('/sneakers', name: 'app_sneakers_index')]
    public function index(SneakersRepository $sneakersRepository): Response
    {

        $sneakers = $sneakersRepository->findAll();

        return $this->render('sneakers/index.html.twig', [
            'sneakers' => $sneakers,
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
