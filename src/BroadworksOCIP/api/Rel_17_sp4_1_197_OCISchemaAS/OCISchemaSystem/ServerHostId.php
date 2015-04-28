<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;


/**
 * Uniquely identifies the server computer hardware.
 */
class ServerHostId extends SimpleType
{
    public $elementName = "ServerHostId";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
    }
}
