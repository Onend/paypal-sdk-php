<?php

namespace Onend\Tests\PayPal\Common\Enum;

use Onend\PayPal\Common\Enum\ApiBaseUrl;

class ApiBaseUrlTest extends \PHPUnit_Framework_TestCase
{
    public function testValues()
    {
        $values = [
            "LIVE" => "https://api.paypal.com/",
            "SANDBOX" => "https://api.sandbox.paypal.com/"
        ];

        $this->assertEquals( $values, ApiBaseUrl::values());
    }

    public function testKeys()
    {
        $values = [
            "LIVE",
            "SANDBOX",
        ];

        $this->assertEquals( $values, ApiBaseUrl::keys() );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The value [undefined_value] not exists in enum [Onend\PayPal\Common\Enum\ApiBaseUrl]
     */
    public function testCheckValue()
    {
        ApiBaseUrl::checkValue("https://api.paypal.com/");
        ApiBaseUrl::checkValue("https://api.sandbox.paypal.com/");
        ApiBaseUrl::checkValue("undefined_value");
    }
} 