<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterCurrentAndPastAgentGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallCenterCurrentAndPastAgentGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterCurrentAndPastAgentGetListResponse';
    protected $agentUserTable;
    protected $deletedAgentUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterCurrentAndPastAgentGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAgentUserTable(TableType $agentUserTable = null)
    {
        $this->agentUserTable = $agentUserTable;
        $this->agentUserTable->setElementName('agentUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAgentUserTable()
    {
        return $this->agentUserTable;
    }

    /**
     * 
     */
    public function setDeletedAgentUserTable(TableType $deletedAgentUserTable = null)
    {
        $this->deletedAgentUserTable = $deletedAgentUserTable;
        $this->deletedAgentUserTable->setElementName('deletedAgentUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDeletedAgentUserTable()
    {
        return $this->deletedAgentUserTable;
    }
}
