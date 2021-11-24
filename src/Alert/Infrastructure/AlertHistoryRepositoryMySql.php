<?php

declare(strict_types=1);

namespace App\Alert\Infrastructure;

use App\Alert\Domain\AlertHistory;
use App\Alert\Domain\AlertHistoryRepository;

final class AlertHistoryRepositoryMySql implements AlertHistoryRepository
{

    public function save(AlertHistory $alertHistory): array
    {
        // TODO: Implement save() method.
    }

}