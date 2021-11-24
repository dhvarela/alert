<?php

declare(strict_types=1);

namespace App\Alert\Application;

use App\Alert\Domain\AlertService;
use App\Alert\Domain\AlertType;
use InvalidArgumentException;

final class AlertServiceFactory
{
    public static function create(AlertType $type): AlertService
    {
        if ($type->getName() === AlertType::QUERY_SYSTEM) {
            return new QuerySystemAlertService();
        } elseif ($type->getName() === AlertType::DOMAIN_CHECKER) {
            return new DomainCheckerAlertService();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}
