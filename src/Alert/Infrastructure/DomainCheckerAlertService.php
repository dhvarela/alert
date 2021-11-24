<?php

declare(strict_types=1);

namespace App\Alert\Infrastructure;

use App\Alert\Domain\Alert;
use App\Alert\Domain\AlertCheckerResponse;
use App\Alert\Domain\AlertService;

final class DomainCheckerAlertService implements AlertService
{

    public function check(Alert $alert, array $params): AlertCheckerResponse
    {
        // TODO: Implement check() method. It should check if a given domain is up or down on the internet. If is down,
        //      an alert should be sent, if is up, return false in sendNotification parameter from AlertCheckerResponse
    }

}