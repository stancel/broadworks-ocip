<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Call Center Announcement Selection.
 */
class CallCenterAnnouncementSelection extends SimpleType
{
    public $elementName = "CallCenterAnnouncementSelection";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'System',
            'Custom'
        ]));
    }
}
