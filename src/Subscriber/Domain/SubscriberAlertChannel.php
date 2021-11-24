<?php

namespace App\Subscriber\Domain;

use App\Alert\Domain\Alert;
use App\Channel\Domain\Channel;

class SubscriberAlertChannel
{
    private Subscriber $subscriber;
    private Alert $alert;
    private Channel $channel;

    public function __construct(Subscriber $subscriber, Alert $alert, Channel $channel)
    {
        $this->subscriber = $subscriber;
        $this->alert      = $alert;
        $this->channel    = $channel;
    }

    public function getSubscriber(): Subscriber
    {
        return $this->subscriber;
    }

    public function getAlert(): Alert
    {
        return $this->alert;
    }

    public function getChannel(): Channel
    {
        return $this->channel;
    }
}