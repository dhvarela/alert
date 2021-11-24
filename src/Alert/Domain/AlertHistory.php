<?php

declare(strict_types=1);

namespace App\Alert\Domain;

use App\Channel\Domain\Channel;
use App\Notification\Domain\RenderedMessage;
use App\Subscriber\Domain\Subscriber;

final class AlertHistory
{
    private Alert $alert;
    private Channel $channel;
    private Subscriber $subscriber;
    private RenderedMessage $renderedMessage;

    public function __construct(
        Alert           $alert,
        Channel         $channel,
        Subscriber      $subscriber,
        RenderedMessage $renderedMessage
    )
    {
        $this->alert           = $alert;
        $this->channel         = $channel;
        $this->subscriber      = $subscriber;
        $this->renderedMessage = $renderedMessage;
    }

    public function getAlert(): Alert
    {
        return $this->alert;
    }

    public function getChannel(): Channel
    {
        return $this->channel;
    }

    public function getSubscriber(): Subscriber
    {
        return $this->subscriber;
    }

    public function getRenderedMessage(): RenderedMessage
    {
        return $this->renderedMessage;
    }
}