<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Protocols that an access device can use to fetch files from BroadWorks.
 */
class DeviceAccessProtocol extends SimpleType
{
    public $elementName = "DeviceAccessProtocol";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Http',
            'Https',
            'FTP'
        ]));
    }
}
