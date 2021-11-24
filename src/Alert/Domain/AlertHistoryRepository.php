<?php

declare(strict_types=1);

namespace App\Alert\Domain;

interface AlertHistoryRepository
{
    public function save(AlertHistory $alertHistory): array;
}