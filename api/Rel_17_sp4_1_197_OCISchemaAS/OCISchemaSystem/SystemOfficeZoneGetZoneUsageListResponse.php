<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemOfficeZoneGetZoneUsageListRequest.
 *         The response contains a table of all Office Zones that
 *         contain the specific Zone. The column headings 
 *         are "Name" and "Description"
 */
class SystemOfficeZoneGetZoneUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $officeZoneTable
    ) {
        $this->officeZoneTable = $officeZoneTable;
        $this->args            = func_get_args();
    }

    public function setOfficeZoneTable($officeZoneTable)
    {
        $officeZoneTable and $this->officeZoneTable = new core:OCITable($officeZoneTable);
    }

    public function getOfficeZoneTable()
    {
        return (!$this->officeZoneTable) ?: $this->officeZoneTable->value();
    }
}