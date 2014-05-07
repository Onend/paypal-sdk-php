<?php

namespace Onend\Tests\PayPal\Common\Auth;

use Onend\PayPal\Common\Auth\Credentials;

class CredentialsTest extends \PHPUnit_Framework_TestCase
{
    const SDK_SANDBOX_CLIENT_ID = "AUOZBBADp7gaP1blpXYcaVeWcPKqXrXf2cq8P_YtR3nplCgHYFlJB_6v0son";

    const SDK_SANDBOX_SECRET = "EL8NwhBrVhN2QbnZAnkwJb_AUHZSBPwch26fkI72UdkURp77iA4AHkD_Gr3y";

    /**
     * @return Credentials
     */
    public static function getCredentials()
    {
        return new Credentials(self::SDK_SANDBOX_CLIENT_ID, self::SDK_SANDBOX_SECRET);
    }

    public function testProperties()
    {
        $credentials = self::getCredentials();

        $this->assertEquals(self::SDK_SANDBOX_CLIENT_ID, $credentials->getClientId());
        $this->assertEquals(self::SDK_SANDBOX_SECRET, $credentials->getSecret());
    }
}
