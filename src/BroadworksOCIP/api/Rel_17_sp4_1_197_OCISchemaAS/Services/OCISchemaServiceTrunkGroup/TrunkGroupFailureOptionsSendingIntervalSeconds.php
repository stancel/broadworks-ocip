<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * Interval at which trunk group failure OPTIONS messages are sent.
 */
class TrunkGroupFailureOptionsSendingIntervalSeconds extends SimpleType
{
    public $elementName = "TrunkGroupFailureOptionsSendingIntervalSeconds";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("10"));
        $this->addRestriction(new MaxInclusive("86400"));
    }
}
