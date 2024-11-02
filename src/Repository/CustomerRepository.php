<?php

namespace App\Repository;

use App\Model\Customer;
use App\Model\CustomerStatusEnum;
use Psr\Log\LoggerInterface;

class CustomerRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll()
    {
        $this->logger->info('Customer data retrieved');

        return
            [
                new Customer(
                    1,
                    'John Doe',
                    'customer',
                    CustomerStatusEnum::ACTIVE
                ),
                new Customer(
                    2,
                    'Jane Doe',
                    'customer',
                    CustomerStatusEnum::PENDING
                ),
                new Customer(
                    3,
                    'James Doe',
                    'customer',
                    CustomerStatusEnum::INACTIVE
                ),
            ];
    }

    public function find(int $id)
    {
        foreach ($this->findAll() as $customer) {
            if ($customer->getId() === $id) {
                return $customer;
            }
        }

        return null;
    }
}
