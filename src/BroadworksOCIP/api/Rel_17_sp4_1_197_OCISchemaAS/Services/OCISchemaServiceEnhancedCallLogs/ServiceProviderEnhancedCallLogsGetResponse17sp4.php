<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsMaxLoggedCalls17sp4;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallExpirationDays;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderEnhancedCallLogsGetRequest17sp4.
 */
class ServiceProviderEnhancedCallLogsGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderEnhancedCallLogsGetResponse17sp4';
    protected $maxLoggedCalls;
    protected $callExpirationDays;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\ServiceProviderEnhancedCallLogsGetResponse17sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaxLoggedCalls($maxLoggedCalls = null)
    {
        $this->maxLoggedCalls = ($maxLoggedCalls InstanceOf EnhancedCallLogsMaxLoggedCalls17sp4)
             ? $maxLoggedCalls
             : new EnhancedCallLogsMaxLoggedCalls17sp4($maxLoggedCalls);
        $this->maxLoggedCalls->setElementName('maxLoggedCalls');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsMaxLoggedCalls17sp4 $maxLoggedCalls
     */
    public function getMaxLoggedCalls()
    {
        return ($this->maxLoggedCalls)
            ? $this->maxLoggedCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallExpirationDays($callExpirationDays = null)
    {
        $this->callExpirationDays = ($callExpirationDays InstanceOf EnhancedCallLogsCallExpirationDays)
             ? $callExpirationDays
             : new EnhancedCallLogsCallExpirationDays($callExpirationDays);
        $this->callExpirationDays->setElementName('callExpirationDays');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsCallExpirationDays $callExpirationDays
     */
    public function getCallExpirationDays()
    {
        return ($this->callExpirationDays)
            ? $this->callExpirationDays->getElementValue()
            : null;
    }
}
