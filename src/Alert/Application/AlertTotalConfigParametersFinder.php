<?php

namespace App\Alert\Application;

use App\Alert\Domain\Alert;

final class AlertTotalConfigParametersFinder
{
    public function __construct()
    {
    }

    /**
     * Get alert parameters (eg. query ('SELECT result FROM ...') and customer parameters (eg. dbHost, dbUser, dbPass, dbPort)
     */
    public function execute(Alert $alert): array
    {
        // TODO
    }
}