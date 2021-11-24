<?php

declare(strict_types = 1);

namespace App\Notification\Domain;

final class RenderedMessage
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}