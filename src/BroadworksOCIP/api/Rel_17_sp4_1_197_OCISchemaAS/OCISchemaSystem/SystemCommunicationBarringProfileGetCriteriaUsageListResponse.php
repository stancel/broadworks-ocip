<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemCommunicationBarringProfileGetCriteriaUsageListRequest.
 *         The response contains a table of system Communication Barring Profiles that
 *         use the specific Communication Barring Criteria. The column headings 
 *         are "Name" and "Description"
 */
class SystemCommunicationBarringProfileGetCriteriaUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringProfileGetCriteriaUsageListResponse';
    protected $profileTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringProfileGetCriteriaUsageListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setProfileTable(TableType $profileTable = null)
    {
        $this->profileTable = $profileTable;
        $this->profileTable->setElementName('profileTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getProfileTable()
    {
        return $this->profileTable;
    }
}
