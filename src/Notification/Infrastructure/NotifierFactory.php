<?php

declare(strict_types=1);

namespace App\Alert\Infrastructure;

use App\Channel\Domain\Channel;
use App\Notification\Domain\Notifier;
use App\Notification\Domain\NotifierServiceFactory;
use App\Notification\Infrastructure\EmailNotifier;
use App\Notification\Infrastructure\SlackNotifier;
use InvalidArgumentException;

final class NotifierFactory implements NotifierServiceFactory
{
    public function create(Channel $channel): Notifier
    {
        if ($channel->getName() === Channel::CHANNEL_EMAIL) {
            return new EmailNotifier();
        } elseif ($channel->getName() === Channel::CHANNEL_SLACK) {
            return new SlackNotifier();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}
