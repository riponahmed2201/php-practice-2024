<?php

declare(strict_types=1);

// Constructor Property Promotion - Nullsafe Operator

class Transaction
{

    private ?Customer $customer = null;

    public function __construct(private float $amount, private string $description)
    {
        // echo $this->amount;
        // echo $amount;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }
}
