<?php

declare(strict_types=1);

namespace App\Alert\Application;

use App\Alert\Domain\Alert;
use App\Alert\Domain\AlertService;

final class DomainCheckerAlertService implements AlertService
{
    public function check(Alert $alert, array $params): AlertCheckerResponse
    {
        // TODO: Implement check() method.
    }
}