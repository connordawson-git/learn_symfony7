<?php

namespace App\Controller;

use App\Repository\CustomerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/customers')]
class CustomerApiController extends AbstractController
{
    #[Route('', methods: ['GET'])]
    public function getCollection(CustomerRepository $repository): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $customers = $repository->findAll();

        return $this->json($customers);
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function get(int $id, CustomerRepository $repository)
    {
        $customer = $repository->find($id);
        if(!$customer) {
            throw $this->createNotFoundException();
        }
        return $this->json($customer);
    }
}
