<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request the user's Polycom Phone Services attributes.
 *         The response is either a UserPolycomPhoneServicesGetResponse or an ErrorResponse.
 */
class UserPolycomPhoneServicesGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices\UserPolycomPhoneServicesGetResponse';
    public    $elementName = 'UserPolycomPhoneServicesGetRequest';
    protected $userId;
    protected $accessDevice;

    public function __construct(
         $userId = '',
         $accessDevice = ''
    ) {
        $this->setUserId($userId);
        $this->setAccessDevice($accessDevice);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices\UserPolycomPhoneServicesGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessDevice(AccessDevice $accessDevice = null)
    {
        $this->accessDevice = ($accessDevice InstanceOf AccessDevice)
             ? $accessDevice
             : new AccessDevice($accessDevice);
        $this->accessDevice->setElementName('accessDevice');
        return $this;
    }

    /**
     * 
     * @return AccessDevice $accessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }
}
