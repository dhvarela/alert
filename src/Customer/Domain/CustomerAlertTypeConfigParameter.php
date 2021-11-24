<?php

declare(strict_types=1);

namespace App\Customer\Domain;

final class CustomerAlertTypeConfigParameter
{
    private $customer;
    private $alertTypeConfigParameter;
    private $value;

    private function __construct(Customer $customer, AlertTypeConfigParameter $alertTypeConfigParameter, string $value)
    {
        $this->customer                 = $customer;
        $this->alertTypeConfigParameter = $alertTypeConfigParameter;
        $this->value                    = $value;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function getAlertTypeConfigParameter(): AlertTypeConfigParameter
    {
        return $this->alertTypeConfigParameter;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}