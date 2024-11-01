<?php

namespace App\Controller;

use App\Model\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class CustomerApiController extends AbstractController
{
    #[Route('/api/customers')]
    public function getCollection()
    {
        $customers =
            [
                new Customer(
                    1,
                    'John Doe',
                    'customer',
                    'active'
                ),
                new Customer(
                    2,
                    'Jane Doe',
                    'customer',
                    'inactive'
                ),
                new Customer(
                    3,
                    'James Doe',
                    'customer',
                    'inactive'
                ),
            ];

        return $this->json($customers);
    }
}
