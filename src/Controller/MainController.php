<?php

namespace App\Controller;

use App\Repository\CustomerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(CustomerRepository $customerRepository): Response
    {
        #example data
        $customers = $customerRepository->findAll();

        return $this->render('main/homepage.html.twig', [
            "customers" => $customers
        ]);
    }
}
