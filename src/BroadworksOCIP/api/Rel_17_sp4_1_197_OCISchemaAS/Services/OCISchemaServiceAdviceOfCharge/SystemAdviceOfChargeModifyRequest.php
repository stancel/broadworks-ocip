<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\AdviceOfChargeDelayBetweenNotificationSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\AdviceOfChargeIncomingAocHandling;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify Advice of Charge system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAdviceOfChargeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAdviceOfChargeModifyRequest';
    protected $delayBetweenNotificationSeconds;
    protected $incomingAocHandling;
    protected $costInformationSource;

    public function __construct(
         $delayBetweenNotificationSeconds = null,
         $incomingAocHandling = null,
         $costInformationSource = null
    ) {
        $this->setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds);
        $this->setIncomingAocHandling($incomingAocHandling);
        $this->setCostInformationSource($costInformationSource);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds = null)
    {
        $this->delayBetweenNotificationSeconds = ($delayBetweenNotificationSeconds InstanceOf AdviceOfChargeDelayBetweenNotificationSeconds)
             ? $delayBetweenNotificationSeconds
             : new AdviceOfChargeDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds);
        $this->delayBetweenNotificationSeconds->setElementName('delayBetweenNotificationSeconds');
        return $this;
    }

    /**
     * 
     * @return AdviceOfChargeDelayBetweenNotificationSeconds $delayBetweenNotificationSeconds
     */
    public function getDelayBetweenNotificationSeconds()
    {
        return ($this->delayBetweenNotificationSeconds)
            ? $this->delayBetweenNotificationSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncomingAocHandling($incomingAocHandling = null)
    {
        $this->incomingAocHandling = ($incomingAocHandling InstanceOf AdviceOfChargeIncomingAocHandling)
             ? $incomingAocHandling
             : new AdviceOfChargeIncomingAocHandling($incomingAocHandling);
        $this->incomingAocHandling->setElementName('incomingAocHandling');
        return $this;
    }

    /**
     * 
     * @return AdviceOfChargeIncomingAocHandling $incomingAocHandling
     */
    public function getIncomingAocHandling()
    {
        return ($this->incomingAocHandling)
            ? $this->incomingAocHandling->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCostInformationSource($costInformationSource = null)
    {
        $this->costInformationSource = ($costInformationSource InstanceOf NetAddress)
             ? $costInformationSource
             : new NetAddress($costInformationSource);
        $this->costInformationSource->setElementName('costInformationSource');
        return $this;
    }

    /**
     * 
     * @return NetAddress $costInformationSource
     */
    public function getCostInformationSource()
    {
        return ($this->costInformationSource)
            ? $this->costInformationSource->getElementValue()
            : null;
    }
}
