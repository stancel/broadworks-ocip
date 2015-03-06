<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtensionLength;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupExtensionLengthGetRequest17.
 */
class GroupExtensionLengthGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $minExtensionLength,
             $maxExtensionLength,
             $defaultExtensionLength
    ) {
        $this->minExtensionLength     = new ExtensionLength($minExtensionLength);
        $this->maxExtensionLength     = new ExtensionLength($maxExtensionLength);
        $this->defaultExtensionLength = new ExtensionLength($defaultExtensionLength);
        $this->args                   = func_get_args();
    }

    public function setMinExtensionLength($minExtensionLength)
    {
        $minExtensionLength and $this->minExtensionLength = new ExtensionLength($minExtensionLength);
    }

    public function getMinExtensionLength()
    {
        return (!$this->minExtensionLength) ?: $this->minExtensionLength->value();
    }

    public function setMaxExtensionLength($maxExtensionLength)
    {
        $maxExtensionLength and $this->maxExtensionLength = new ExtensionLength($maxExtensionLength);
    }

    public function getMaxExtensionLength()
    {
        return (!$this->maxExtensionLength) ?: $this->maxExtensionLength->value();
    }

    public function setDefaultExtensionLength($defaultExtensionLength)
    {
        $defaultExtensionLength and $this->defaultExtensionLength = new ExtensionLength($defaultExtensionLength);
    }

    public function getDefaultExtensionLength()
    {
        return (!$this->defaultExtensionLength) ?: $this->defaultExtensionLength->value();
    }
}