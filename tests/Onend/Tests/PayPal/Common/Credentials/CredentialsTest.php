<?php

namespace Onend\Tests\PayPal\Common\Credentials;

use Onend\PayPal\Common\Credentials\Credentials;

class CredentialsTest extends \PHPUnit_Framework_TestCase
{
    public function testProperties()
    {
        $credentials = new Credentials("id", "secret");

        $this->assertEquals("id", $credentials->getClientId());
        $this->assertEquals("secret", $credentials->getSecret());
    }
}