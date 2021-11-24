<?php

declare(strict_types=1);

namespace App\Alert\Domain;

interface AlertService
{
    public function check(Alert $alert, array $params): AlertCheckerResponse;
}
