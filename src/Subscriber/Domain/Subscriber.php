<?php

namespace App\Subscriber\Domain;

use App\Alert\Domain\Customer;

class Subscriber
{
    private Customer $customer;
    private $name;

    public function __construct(Customer $customer, string $name)
    {
        $this->customer = $customer;
        $this->name = $name;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function getName(): string
    {
        return $this->name;
    }

}