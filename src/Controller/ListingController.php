<?php

namespace App\Controller;

use App\Entity\Listing;
use App\Repository\ListingRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListingController extends AbstractController
{
    #[Route('/listing/{id}', name: 'app_listing', methods:'GET')]
    public function index(Listing $listing): Response
    {
        return $this->render('listing/index.html.twig', [
            'listing' => $listing,
        ]);
    }

    
}
