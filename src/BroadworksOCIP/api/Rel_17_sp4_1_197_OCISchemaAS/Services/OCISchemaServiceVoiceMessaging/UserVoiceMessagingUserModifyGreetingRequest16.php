<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingAlternateNoAnswerGreetingModify16;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNoAnswerGreetingSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNumberOfRings;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's voice messaging greeting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserVoiceMessagingUserModifyGreetingRequest16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserModifyGreetingRequest16';
    protected $userId;
    protected $busyAnnouncementSelection;
    protected $busyPersonalAudioFile;
    protected $busyPersonalVideoFile;
    protected $noAnswerAnnouncementSelection;
    protected $noAnswerPersonalAudioFile;
    protected $noAnswerPersonalVideoFile;
    protected $noAnswerAlternateGreeting01;
    protected $noAnswerAlternateGreeting02;
    protected $noAnswerAlternateGreeting03;
    protected $noAnswerNumberOfRings;

    public function __construct(
         $userId = '',
         $busyAnnouncementSelection = null,
         $busyPersonalAudioFile = null,
         $busyPersonalVideoFile = null,
         $noAnswerAnnouncementSelection = null,
         $noAnswerPersonalAudioFile = null,
         $noAnswerPersonalVideoFile = null,
         $noAnswerAlternateGreeting01 = null,
         $noAnswerAlternateGreeting02 = null,
         $noAnswerAlternateGreeting03 = null,
         $noAnswerNumberOfRings = null
    ) {
        $this->setUserId($userId);
        $this->setBusyAnnouncementSelection($busyAnnouncementSelection);
        $this->setBusyPersonalAudioFile($busyPersonalAudioFile);
        $this->setBusyPersonalVideoFile($busyPersonalVideoFile);
        $this->setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection);
        $this->setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile);
        $this->setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile);
        $this->setNoAnswerAlternateGreeting01($noAnswerAlternateGreeting01);
        $this->setNoAnswerAlternateGreeting02($noAnswerAlternateGreeting02);
        $this->setNoAnswerAlternateGreeting03($noAnswerAlternateGreeting03);
        $this->setNoAnswerNumberOfRings($noAnswerNumberOfRings);
    }

    /**
     * @return mixed $response
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
    public function setBusyAnnouncementSelection($busyAnnouncementSelection = null)
    {
        $this->busyAnnouncementSelection = ($busyAnnouncementSelection InstanceOf AnnouncementSelection)
             ? $busyAnnouncementSelection
             : new AnnouncementSelection($busyAnnouncementSelection);
        $this->busyAnnouncementSelection->setElementName('busyAnnouncementSelection');
        return $this;
    }

    /**
     * 
     * @return AnnouncementSelection $busyAnnouncementSelection
     */
    public function getBusyAnnouncementSelection()
    {
        return ($this->busyAnnouncementSelection)
            ? $this->busyAnnouncementSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyPersonalAudioFile(LabeledMediaFileResource $busyPersonalAudioFile = null)
    {
        $this->busyPersonalAudioFile = ($busyPersonalAudioFile InstanceOf LabeledMediaFileResource)
             ? $busyPersonalAudioFile
             : new LabeledMediaFileResource($busyPersonalAudioFile);
        $this->busyPersonalAudioFile->setElementName('busyPersonalAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $busyPersonalAudioFile
     */
    public function getBusyPersonalAudioFile()
    {
        return $this->busyPersonalAudioFile;
    }

    /**
     * 
     */
    public function setBusyPersonalVideoFile(LabeledMediaFileResource $busyPersonalVideoFile = null)
    {
        $this->busyPersonalVideoFile = ($busyPersonalVideoFile InstanceOf LabeledMediaFileResource)
             ? $busyPersonalVideoFile
             : new LabeledMediaFileResource($busyPersonalVideoFile);
        $this->busyPersonalVideoFile->setElementName('busyPersonalVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $busyPersonalVideoFile
     */
    public function getBusyPersonalVideoFile()
    {
        return $this->busyPersonalVideoFile;
    }

    /**
     * 
     */
    public function setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection = null)
    {
        $this->noAnswerAnnouncementSelection = ($noAnswerAnnouncementSelection InstanceOf VoiceMessagingNoAnswerGreetingSelection)
             ? $noAnswerAnnouncementSelection
             : new VoiceMessagingNoAnswerGreetingSelection($noAnswerAnnouncementSelection);
        $this->noAnswerAnnouncementSelection->setElementName('noAnswerAnnouncementSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return ($this->noAnswerAnnouncementSelection)
            ? $this->noAnswerAnnouncementSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalAudioFile(LabeledMediaFileResource $noAnswerPersonalAudioFile = null)
    {
        $this->noAnswerPersonalAudioFile = ($noAnswerPersonalAudioFile InstanceOf LabeledMediaFileResource)
             ? $noAnswerPersonalAudioFile
             : new LabeledMediaFileResource($noAnswerPersonalAudioFile);
        $this->noAnswerPersonalAudioFile->setElementName('noAnswerPersonalAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $noAnswerPersonalAudioFile
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return $this->noAnswerPersonalAudioFile;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalVideoFile(LabeledMediaFileResource $noAnswerPersonalVideoFile = null)
    {
        $this->noAnswerPersonalVideoFile = ($noAnswerPersonalVideoFile InstanceOf LabeledMediaFileResource)
             ? $noAnswerPersonalVideoFile
             : new LabeledMediaFileResource($noAnswerPersonalVideoFile);
        $this->noAnswerPersonalVideoFile->setElementName('noAnswerPersonalVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $noAnswerPersonalVideoFile
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return $this->noAnswerPersonalVideoFile;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting01(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting01 = null)
    {
        $this->noAnswerAlternateGreeting01 = ($noAnswerAlternateGreeting01 InstanceOf VoiceMessagingAlternateNoAnswerGreetingModify16)
             ? $noAnswerAlternateGreeting01
             : new VoiceMessagingAlternateNoAnswerGreetingModify16($noAnswerAlternateGreeting01);
        $this->noAnswerAlternateGreeting01->setElementName('noAnswerAlternateGreeting01');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting01
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting02(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting02 = null)
    {
        $this->noAnswerAlternateGreeting02 = ($noAnswerAlternateGreeting02 InstanceOf VoiceMessagingAlternateNoAnswerGreetingModify16)
             ? $noAnswerAlternateGreeting02
             : new VoiceMessagingAlternateNoAnswerGreetingModify16($noAnswerAlternateGreeting02);
        $this->noAnswerAlternateGreeting02->setElementName('noAnswerAlternateGreeting02');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting02
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting03(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting03 = null)
    {
        $this->noAnswerAlternateGreeting03 = ($noAnswerAlternateGreeting03 InstanceOf VoiceMessagingAlternateNoAnswerGreetingModify16)
             ? $noAnswerAlternateGreeting03
             : new VoiceMessagingAlternateNoAnswerGreetingModify16($noAnswerAlternateGreeting03);
        $this->noAnswerAlternateGreeting03->setElementName('noAnswerAlternateGreeting03');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting03
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return $this->noAnswerAlternateGreeting03;
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf VoiceMessagingNumberOfRings)
             ? $noAnswerNumberOfRings
             : new VoiceMessagingNumberOfRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setElementName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingNumberOfRings $noAnswerNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return ($this->noAnswerNumberOfRings)
            ? $this->noAnswerNumberOfRings->getElementValue()
            : null;
    }
}
