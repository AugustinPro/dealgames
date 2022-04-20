<?php

namespace App\Controller;

use App\Repository\ListingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ListingRepository $listingRepository, Request $request): Response
    {

        $listings = $listingRepository->findAll();

        return $this->render('front/index.html.twig', [
            'listings' => $listings,
        ]);
    }

    
}
