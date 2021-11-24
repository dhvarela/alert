<?php

declare(strict_types=1);

namespace App\Alert\Infrastructure;

use App\Alert\Domain\Alert;
use App\Alert\Domain\AlertCheckerResponse;
use App\Alert\Domain\AlertService;

final class QuerySystemAlertService implements AlertService
{
    public function check(Alert $alert, array $params): AlertCheckerResponse
    {
        // TODO: Implement check() method. It should do a query to the specified database and return a boolean result parameter
        //      If query result is true, alert should be notified
    }
}