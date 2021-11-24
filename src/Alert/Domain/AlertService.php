<?php

declare(strict_types=1);

namespace App\Alert\Domain;

use App\Alert\Application\AlertCheckerResponse;

interface AlertService
{
    public function check(Alert $alert, array $params): AlertCheckerResponse;
}
