<?php

declare(strict_types = 1);

namespace App\Notification\Domain;

use App\Alert\Domain\Alert;

interface Notifier
{
    public function notify(Alert $alert, array $params): RenderedMessage;
}
