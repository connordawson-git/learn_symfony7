<?php

namespace App\Model;


class Customer
{
    public function __construct(
        private int $id,
        private string $name,
        private string $type,
        private CustomerStatusEnum $status,
    ) {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getStatus(): CustomerStatusEnum
    {
        return $this->status;
    }

}
