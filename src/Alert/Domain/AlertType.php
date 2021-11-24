<?php

declare(strict_types=1);

namespace App\Alert\Domain;

final class AlertType
{
    public const QUERY_SYSTEM   = 'query system';
    public const DOMAIN_CHECKER = 'domain checker';

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}