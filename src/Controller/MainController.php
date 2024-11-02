<?php

namespace App\Controller;

use App\Repository\CustomerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main_homepage')]
    public function homepage(CustomerRepository $customerRepository): Response
    {
        // example data
        $customers = $customerRepository->findAll();
        $customer = $customers[array_rand($customers)];

        return $this->render('main/homepage.html.twig', [
            'customers' => $customers,
            'customer' => $customer,
        ]);
    }
}
