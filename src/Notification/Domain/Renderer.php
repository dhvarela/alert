<?php

declare(strict_types = 1);

namespace App\Notification\Domain;

interface Renderer
{
    public function render(array $params) :RenderedMessage;
}
