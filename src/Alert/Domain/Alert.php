<?php

declare(strict_types = 1);

namespace App\Alert\Domain;

use App\Customer\Domain\Customer;

final class Alert
{
    private $name;
    private $customer;
    private $alertType;
    private $frequencyInMinutes;

    public function __construct(string $name, Customer $customer, AlertType $alertType, int $frequencyInMinutes)
    {
        $this->name               = $name;
        $this->customer           = $customer;
        $this->alertType          = $alertType;
        $this->frequencyInMinutes = $frequencyInMinutes;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function getAlertType(): AlertType
    {
        return $this->alertType;
    }

    public function getFrequencyInMinutes(): int
    {
        return $this->frequencyInMinutes;
    }

    /**
     * Get the lastExecution time and compare with frequency minutes.
     * Return true if last execution have exceeded the frequency minutes
     */
    public function isExecutable(): bool
    {
        // TODO

        return true;
    }

}