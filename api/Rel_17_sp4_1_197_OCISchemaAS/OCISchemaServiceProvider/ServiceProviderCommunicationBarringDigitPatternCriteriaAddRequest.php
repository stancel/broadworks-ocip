<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a new Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $name,
             $description=null,
             $matchDigitPattern=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->name              = new DigitPatternCriteriaName($name);
        $this->description       = new DigitPatternCriteriaDescription($description);
        $this->matchDigitPattern = new DigitPattern($matchDigitPattern);
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setName($name)
    {
        $name and $this->name = new DigitPatternCriteriaName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new DigitPatternCriteriaDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setMatchDigitPattern($matchDigitPattern)
    {
        $matchDigitPattern and $this->matchDigitPattern = new DigitPattern($matchDigitPattern);
    }

    public function getMatchDigitPattern()
    {
        return (!$this->matchDigitPattern) ?: $this->matchDigitPattern->value();
    }
}