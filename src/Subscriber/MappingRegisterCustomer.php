<?php declare(strict_types=1);

namespace Swag\ExampleCustomerMiddleName\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Shopware\Core\Framework\Event\DataMappingEvent;
use Shopware\Core\Checkout\Customer\CustomerEvents;

class MappingRegisterCustomer implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            CustomerEvents::MAPPING_REGISTER_CUSTOMER => 'mapCustomMiddleNameField',
            CustomerEvents::MAPPING_CUSTOMER_PROFILE_SAVE => 'mapCustomMiddleNameField',
        ];
    }

    public function mapCustomMiddleNameField(DataMappingEvent $event)
    {
        $inputData = $event->getInput();
        $outputData = $event->getOutput();

        $middleNameValue = $inputData->get('middleName', '');
        $outputData['customFields'] = array('custom_customer_middlename' => $middleNameValue);

        $event->setOutput($outputData);
        return true;
    }
}
