<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponsePagingControl;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallLogsType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request user's call logs.
 *         If the callLogType is not specified, all types of calls logs (placed, received, missed) are returned.
 *         It is possible to restrict the number of rows returned using responsePagingControl.
 *         The response is either a UserEnhancedCallLogsGetListResponse16 or an ErrorResponse.
 */
class UserEnhancedCallLogsGetListRequest16 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserEnhancedCallLogsGetListResponse16';
    public    $elementName = 'UserEnhancedCallLogsGetListRequest16';
    protected $userId;
    protected $callLogType;
    protected $responsePagingControl;

    public function __construct(
         $userId = '',
         $callLogType = null,
         $responsePagingControl = null
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
        $this->setResponsePagingControl($responsePagingControl);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserEnhancedCallLogsGetListResponse16 $response
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
    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = ($callLogType InstanceOf CallLogsType)
             ? $callLogType
             : new CallLogsType($callLogType);
        $this->callLogType->setElementName('callLogType');
        return $this;
    }

    /**
     * 
     * @return CallLogsType $callLogType
     */
    public function getCallLogType()
    {
        return ($this->callLogType)
            ? $this->callLogType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResponsePagingControl(ResponsePagingControl $responsePagingControl = null)
    {
        $this->responsePagingControl = ($responsePagingControl InstanceOf ResponsePagingControl)
             ? $responsePagingControl
             : new ResponsePagingControl($responsePagingControl);
        $this->responsePagingControl->setElementName('responsePagingControl');
        return $this;
    }

    /**
     * 
     * @return ResponsePagingControl $responsePagingControl
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }
}
