<?php

namespace App\Service\Notification;

use App\Alert\Application\SubscriberAlertChannelFinder;
use App\Alert\Domain\Alert;
use App\Alert\Domain\AlertHistory;
use App\Alert\Domain\AlertHistoryRepository;
use App\Notification\Domain\NotifierServiceFactory;
use App\Subscriber\Domain\SubscriberAlertChannel;

final class AlertNotifier
{
    private SubscriberAlertChannelFinder $subscriberAlertChannelFinder;
    private SubscriberChannelConfigParametersFinder $subscriberChannelConfigParametersFinder;
    private AlertHistoryRepository $alertHistoryRepository;
    private NotifierServiceFactory $notifierServiceFactory;

    public function __construct(
        SubscriberAlertChannelFinder            $subscriberAlertChannelFinder,
        SubscriberChannelConfigParametersFinder $subscriberChannelConfigParametersFinder,
        AlertHistoryRepository                  $alertHistoryRepository,
        NotifierServiceFactory                  $notifierServiceFactory
    )
    {
        $this->subscriberAlertChannelFinder            = $subscriberAlertChannelFinder;
        $this->subscriberChannelConfigParametersFinder = $subscriberChannelConfigParametersFinder;
        $this->alertHistoryRepository                  = $alertHistoryRepository;
        $this->notifierServiceFactory                  = $notifierServiceFactory;
    }

    public function execute(Alert $alert): void
    {
        $items = $this->subscriberAlertChannelFinder->execute($alert);

        /** @var SubscriberAlertChannel $subscriberAlertChannel */
        foreach ($items as $subscriberAlertChannel) {
            $subscriber             = $subscriberAlertChannel->getSubscriber();
            $channel                = $subscriberAlertChannel->getChannel();
            $channelNotifierService = $this->notifierServiceFactory::create($channel);

            // TODO implement service subscriberChannelConfigParametersFinder
            //      allowing to get config params given a subscriber and a channel
            //      eg. For email channel, parameters will be smtpServer, smtpUser, etc...
            $params = $this->subscriberChannelConfigParametersFinder->execute(
                $subscriberAlertChannel->getSubscriber(),
                $subscriberAlertChannel->getChannel()
            );

            $renderedMessage = $channelNotifierService->notify($alert, $params);

            $this->alertHistoryRepository->save(
                new AlertHistory(
                    $alert,
                    $channel,
                    $subscriber,
                    $renderedMessage
                )
            );
        }
    }
}