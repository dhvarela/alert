<?php

declare(strict_types = 1);

namespace App\Notification\Application\Render;

use App\Notification\Domain\RenderedMessage;
use App\Notification\Domain\Renderer;

final class EmailRenderer implements Renderer
{
    public function render(array $params): RenderedMessage
    {
        // TODO: Implement render() method.

        return new RenderedMessage('Lorem ipsum');
    }
}