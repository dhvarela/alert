<?php

declare(strict_types=1);

namespace App\Alert\Domain;

use JsonSerializable;

final class AlertCheckerResponse implements JsonSerializable
{
    private $success;
    private $sendNotification;
    private $error;

    public function __construct(
        bool    $success,
        bool    $sendNotification,
        ?string $error
    )
    {
        $this->success          = $success;
        $this->sendNotification = $sendNotification;
        $this->error            = $error;
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function isSendNotification(): bool
    {
        return $this->sendNotification;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function toArray()
    {
        return [
            'success'          => $this->isSuccess(),
            'sendNotification' => $this->isSendNotification(),
            'error'            => $this->getError()
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}