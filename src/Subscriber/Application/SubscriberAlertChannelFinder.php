<?php

namespace App\Alert\Application;

use App\Alert\Domain\Alert;

class SubscriberAlertChannelFinder
{
    public function __construct()
    {
    }

    /**
     * Given an alert, get all the subscribers and its channels relations
     */
    public function execute(Alert $alert): array
    {
        // TODO
    }
}