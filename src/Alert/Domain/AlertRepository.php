<?php

declare(strict_types=1);

namespace App\Alert\Domain;

interface AlertRepository
{
    public function searchAll(): array;
}