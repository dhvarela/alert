<?php

namespace App\Notification\Domain;

use App\Alert\Domain\AlertService;
use App\Alert\Domain\AlertType;

interface AlertServiceFactory
{
    public function create(AlertType $alertType): AlertService;
}