<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        #example data
        $developerName = "Connor";
        $customerArray = [
            'name' => 'John Doe',
            'type' => 'Customer',
            'status' => 'active',
        ];

        return $this->render('main/homepage.html.twig', [
            "developerName" => $developerName,
            "customerArray" => $customerArray
        ]);
    }
}
