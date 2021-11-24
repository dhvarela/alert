<?php

declare(strict_types=1);

namespace App\Notification\Infrastructure;

use App\Alert\Domain\Alert;
use App\Notification\Application\Render\EmailRenderer;
use App\Notification\Domain\Notifier;
use App\Notification\Domain\RenderedMessage;

final class EmailNotifier implements Notifier
{
    private EmailRenderer $renderer;

    public function __construct()
    {
        $this->setRender();
    }

    private function setRender(): void
    {
        $this->renderer = new EmailRenderer();
    }

    public function notify(Alert $alert, array $params): RenderedMessage
    {
        $renderParams    = $this->prepareRenderParams($alert);
        $renderedMessage = $this->renderer->render($renderParams);

        // TODO send email
        //$this->client->send($params['from'], $params['to'], $params['subject'], $renderedMessage);

        return $renderedMessage;
    }

    private function prepareParams(Alert $alert): array
    {
        // TODO prepare the params that will be needed
    }
}