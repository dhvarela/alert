<?php

declare(strict_types = 1);

namespace App\Notification\Infrastructure;

use App\Alert\Domain\Alert;
use App\Notification\Application\Render\SlackRenderer;
use App\Notification\Domain\Notifier;
use App\Notification\Domain\RenderedMessage;

final class SlackNotifier implements Notifier
{
    private SlackRenderer $renderer;

    public function __construct()
    {
        $this->setRender();
    }

    private function setRender(): void
    {
        $this->renderer = new SlackRenderer();
    }

    public function notify(Alert $alert, array $params): RenderedMessage
    {
        // TODO
    }
}