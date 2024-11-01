<?php

namespace App\Controller;

use App\Repository\CustomerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class CustomerApiController extends AbstractController
{
    #[Route('/api/customers')]
    public function getCollection(CustomerRepository $repository)
    {
        $customers = $repository->findAll();

        return $this->json($customers);
    }
}
