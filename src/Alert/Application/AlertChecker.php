<?php

declare(strict_types=1);

namespace App\Alert\Application;

use App\Alert\Domain\Alert;
use App\Alert\Domain\AlertRepository;
use App\Service\Notification\AlertNotifier;

class AlertChecker
{
    private $repository;
    private $alertTotalConfigParametersFinder;
    private $notifier;

    public function __construct(
        AlertRepository                  $repository,
        AlertTotalConfigParametersFinder $alertTotalConfigParametersFinder,
        AlertNotifier                    $notifier
    )
    {
        $this->repository                       = $repository;
        $this->alertTotalConfigParametersFinder = $alertTotalConfigParametersFinder;
        $this->notifier                         = $notifier;
    }

    public function execute(): void
    {
        $alerts = $this->repository->searchAll();

        /** @var Alert $anAlert */
        foreach ($alerts as $anAlert) {

            if (!$anAlert->isExecutable()) {
                continue;
            }

            $configParams        = $this->alertTotalConfigParametersFinder->execute($anAlert);
            $alertCheckerService = AlertServiceFactory::create($anAlert->getAlertType());

            $alertCheckerResponse = $alertCheckerService->check($anAlert, $configParams);

            if ($alertCheckerResponse->isSuccess()) {
                if ($alertCheckerResponse->isSendNotification()) {
                    $this->notifier->execute($anAlert);
                }
            } else {
                trigger_error($alertCheckerResponse->getError());
            }
        }
    }
}