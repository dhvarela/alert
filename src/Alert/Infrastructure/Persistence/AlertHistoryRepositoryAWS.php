<?php

declare(strict_types=1);

namespace App\Alert\Infrastructure\Persistence;

use App\Alert\Domain\AlertHistory;
use App\Alert\Domain\AlertHistoryRepository;

final class AlertHistoryRepositoryAWS implements AlertHistoryRepository
{

    public function save(AlertHistory $alertHistory): array
    {
        // TODO: Implement save() method.
    }

}