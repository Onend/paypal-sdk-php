<?php
namespace Onend\Tests\PayPal\Common\Credentials;

use Onend\PayPal\Common\Auth\AccessToken;

class AccessTokenTest extends \PHPUnit_Framework_TestCase
{
    public function testExpiration()
    {
        $token = new AccessToken();
        $token->setExpiresIn(120);

        $this->assertFalse($token->isExpired());
        sleep(1);
        $this->assertTrue($token->isExpired());
    }

    public function testRequestIdDouesNotChange()
    {
        $token = new AccessToken();
        $id = $token->getRequestId();
        $this->assertSame( $id, $token->getRequestId() );
    }
}
