<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;


/**
 * Outgoing Calling Plan Authorization Code.
 */
class OutgoingCallingPlanAuthorizationCode extends SimpleType
{
    public $elementName = "OutgoingCallingPlanAuthorizationCode";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("2"));
        $this->addRestriction(new MaxLength("14"));
    }
}
