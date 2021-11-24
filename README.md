## AlertSystem

AlertSystem is a notification system that allow to send notifications to subscribers that previously have been subscribed in an alert through different channels (email, slack, etc) 

## Requiments:
- Linux.
- Docker must be installed in your local host.

## Get started

##### Clone the project

    $ git clone https://github.com/dhvarela/alert.git
    $ cd alert/
    
##### Environment configuration 

Run the composer:

    $ composer install
    
##### Execute PHPUnit tests

    $ bin/phpunit

##### Alert Checker

The AlertChecker.php service is a service that can be launched from a cron process every minute, or every n minutes.
The service get all the alerts that previously subscribers have been created and check if alert should be executed.

There are different types of alerts (show it in AlertType.php file)

###### Considerations:

A subscriber belongs to a customer -- That's because every customer have their custom configurations for different alert 
types. Eg. database config parameters

In addition, some config parameters could be necessary depending on channel through which the alert is sent. For example: 
* the slack username for slack notifications,  
* the email subscriber for email notifications
* etc

The not implemented service subscriberChannelConfigParametersFinder is responsible for making this check