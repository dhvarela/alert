<?php

namespace App\Notification\Domain;

use App\Channel\Domain\Channel;

interface NotifierServiceFactory
{
    public function create(Channel $channel): Notifier;
}