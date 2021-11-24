<?php

declare(strict_types=1);

namespace App\Customer\Domain;

final class Customer
{
    private $name;
    private $apiKey;
    private $apiSecret;
    private $channels;

    private function __construct(
        string $name,
        string $apiKey,
        string $apiSecret,
        array  $channels
    )
    {
        $this->name      = $name;
        $this->apiKey    = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->channels  = $channels;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getApiSecret(): string
    {
        return $this->apiSecret;
    }

    public function getChannels(): array
    {
        return $this->channels;
    }
}