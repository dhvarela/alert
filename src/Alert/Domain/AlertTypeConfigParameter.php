<?php

declare(strict_types=1);

namespace App\Alert\Domain;

final class AlertTypeConfigParameter
{
    public const QUERY_SYSTEM_DB_HOST = 'dbHost';
    public const QUERY_SYSTEM_DB_PORT = 'dbPort';
    public const QUERY_SYSTEM_DB_USER = 'dbUser';
    public const QUERY_SYSTEM_DB_PASS = 'dbPass';

    private $name;
    private $alertType;
    private $parameterName;
    private $isCustomerParameter;

    private function __construct(string $name, AlertType $alertType, string $parameterName, bool $isCustomerParameter)
    {
        $this->name                = $name;
        $this->alertType           = $alertType;
        $this->parameterName       = $parameterName;
        $this->isCustomerParameter = $isCustomerParameter;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAlertType(): AlertType
    {
        return $this->alertType;
    }

    public function getParameterName(): string
    {
        return $this->parameterName;
    }

    public function isCustomerParameter(): bool
    {
        return $this->isCustomerParameter;
    }
}