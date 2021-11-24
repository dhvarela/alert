<?php

declare(strict_types=1);

namespace App\Channel\Domain;

final class Channel
{
    public const CHANNEL_EMAIL    = 'email';
    public const CHANNEL_SLACK    = 'slack';
    public const CHANNEL_WEB_PUSH = 'webPush';

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}