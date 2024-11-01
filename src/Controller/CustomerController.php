<?php

namespace App\Controller;

use App\Repository\CustomerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CustomerController extends AbstractController
{
    #[Route('/customers/{id<\d+>}', name: 'app_customer_show')]
    public function show(int $id, CustomerRepository $repository): Response
    {
        $customer = $repository->find($id);
        if (!$customer) {
            throw $this->createNotFoundException('Customer not found');
        }

        return $this->render('customer/show.html.twig',[
            'customer' => $customer
        ]);
    }
}
