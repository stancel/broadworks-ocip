<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignedPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * LoginRequest14sp4 is 2nd stage of the 2 stage OCI login process.
 *         The signedPassword is not required for external authentication login from a trusted host (ACL).
 */
class LoginRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $signedPassword=null,
             $plainTextPassword=null
    ) {
        $this->userId            = new UserId($userId);
        $this->signedPassword    = new SignedPassword($signedPassword);
        $this->plainTextPassword = new Password($plainTextPassword);
        $this->args              = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setSignedPassword($signedPassword)
    {
        $signedPassword and $this->signedPassword = new SignedPassword($signedPassword);
    }

    public function getSignedPassword()
    {
        return (!$this->signedPassword) ?: $this->signedPassword->value();
    }

    public function setPlainTextPassword($plainTextPassword)
    {
        $plainTextPassword and $this->plainTextPassword = new Password($plainTextPassword);
    }

    public function getPlainTextPassword()
    {
        return (!$this->plainTextPassword) ?: $this->plainTextPassword->value();
    }
}