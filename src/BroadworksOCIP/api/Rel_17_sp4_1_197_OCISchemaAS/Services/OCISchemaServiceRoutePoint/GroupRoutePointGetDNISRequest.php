<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get a route point's DNIS.
 *         The response is either a GroupRoutePointGetDNISResponse or an ErrorResponse.
 */
class GroupRoutePointGetDNISRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISResponse';
    public    $elementName = 'GroupRoutePointGetDNISRequest';
    protected $dnisKey;

    public function __construct(
         $dnisKey = ''
    ) {
        $this->setDnisKey($dnisKey);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnisKey(DNISKey $dnisKey = null)
    {
        $this->dnisKey = ($dnisKey InstanceOf DNISKey)
             ? $dnisKey
             : new DNISKey($dnisKey);
        $this->dnisKey->setElementName('dnisKey');
        return $this;
    }

    /**
     * 
     * @return DNISKey $dnisKey
     */
    public function getDnisKey()
    {
        return $this->dnisKey;
    }
}
