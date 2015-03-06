<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Assign a list of Network Classes of Service to a service provider.
 *         The Element defaultNetworkClassOfService is required only for the first assignment, 
 *         for subsequent assignments it is optional.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderNetworkClassOfServiceAssignListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $networkClassOfService=null,
             $defaultNetworkClassOfService=null
    ) {
        $this->serviceProviderId            = new ServiceProviderId($serviceProviderId);
        $this->networkClassOfService        = new NetworkClassOfServiceName($networkClassOfService);
        $this->defaultNetworkClassOfService = new NetworkClassOfServiceName($defaultNetworkClassOfService);
        $this->args                         = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setNetworkClassOfService($networkClassOfService)
    {
        $networkClassOfService and $this->networkClassOfService = new NetworkClassOfServiceName($networkClassOfService);
    }

    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->value();
    }

    public function setDefaultNetworkClassOfService($defaultNetworkClassOfService)
    {
        $defaultNetworkClassOfService and $this->defaultNetworkClassOfService = new NetworkClassOfServiceName($defaultNetworkClassOfService);
    }

    public function getDefaultNetworkClassOfService()
    {
        return (!$this->defaultNetworkClassOfService) ?: $this->defaultNetworkClassOfService->value();
    }
}