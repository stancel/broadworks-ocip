<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterCurrentAndPastCallCenterGetListRequest.
 */
class GroupCallCenterCurrentAndPastCallCenterGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterCurrentAndPastCallCenterGetListResponse';
    protected $serviceUserId;
    protected $deletedServiceUserId;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterCurrentAndPastCallCenterGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeletedServiceUserId($deletedServiceUserId = null)
    {
        $this->deletedServiceUserId = ($deletedServiceUserId InstanceOf UserId)
             ? $deletedServiceUserId
             : new UserId($deletedServiceUserId);
        $this->deletedServiceUserId->setElementName('deletedServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $deletedServiceUserId
     */
    public function getDeletedServiceUserId()
    {
        return ($this->deletedServiceUserId)
            ? $this->deletedServiceUserId->getElementValue()
            : null;
    }
}
