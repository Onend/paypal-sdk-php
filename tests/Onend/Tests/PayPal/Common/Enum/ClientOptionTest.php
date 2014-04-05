<?php

namespace Onend\Tests\PayPal\Common\Enum;

use Onend\PayPal\Common\Enum\ClientOption;

class ClientOptionTest extends \PHPUnit_Framework_TestCase
{
    public function testValues()
    {
        $values = [
            "CLIENT_ID" => "client_id",
            "SECRET" => "secret",
            "ACCESS_TOKEN" => "auth_token"
        ];

        $this->assertEquals( $values, ClientOption::values());
    }

    public function testKeys()
    {
        $values = [
            "CLIENT_ID",
            "SECRET",
            "ACCESS_TOKEN"
        ];

        $this->assertEquals( $values, ClientOption::keys() );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The value "undefined_value" not exist in enum (Onend\PayPal\Common\Enum\ClientOption)
     */
    public function testCheckValue()
    {
        ClientOption::checkValue("secret");
        ClientOption::checkValue("undefined_value");
    }
} 