<?php

declare(strict_types=1);

namespace App\Alert\Infrastructure;

use App\Alert\Domain\AlertService;
use App\Alert\Domain\AlertType;
use App\Notification\Domain\AlertServiceFactory;
use InvalidArgumentException;

final class AlertFactory implements AlertServiceFactory
{
    public function create(AlertType $type): AlertService
    {
        if ($type->getName() === AlertType::QUERY_SYSTEM) {
            return new QuerySystemAlertService();
        } elseif ($type->getName() === AlertType::DOMAIN_CHECKER) {
            return new DomainCheckerAlertService();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}
