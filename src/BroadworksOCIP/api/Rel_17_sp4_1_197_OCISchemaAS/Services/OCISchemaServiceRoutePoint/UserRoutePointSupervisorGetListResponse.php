<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserRoutePointSupervisorGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class UserRoutePointSupervisorGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserRoutePointSupervisorGetListResponse';
    protected $supervisorTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\UserRoutePointSupervisorGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSupervisorTable(TableType $supervisorTable = null)
    {
        $this->supervisorTable = $supervisorTable;
        $this->supervisorTable->setElementName('supervisorTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSupervisorTable()
    {
        return $this->supervisorTable;
    }
}
