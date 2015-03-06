<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 */
class GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $trunkGroupName=null
    ) {
        $this->trunkGroupName = new TrunkGroupName($trunkGroupName);
        $this->args           = func_get_args();
    }

    public function setTrunkGroupName($trunkGroupName)
    {
        $trunkGroupName and $this->trunkGroupName = new TrunkGroupName($trunkGroupName);
    }

    public function getTrunkGroupName()
    {
        return (!$this->trunkGroupName) ?: $this->trunkGroupName->value();
    }
}