<?php

namespace Onend\Tests\PayPal\Common\Enum;

use Onend\PayPal\Common\Enum\Intent;

class IntentTest extends \PHPUnit_Framework_TestCase
{
    public function testValues()
    {
        $values = [
            "SALE" => "sale",
            "AUTHORIZE" => "authorize"
        ];

        $this->assertEquals($values, Intent::values());
    }

    public function testKeys()
    {
        $values = [
            "SALE",
            "AUTHORIZE",
        ];

        $this->assertEquals($values, Intent::keys());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The value [undefined_value] not exists in enum [Onend\PayPal\Common\Enum\Intent]
     */
    public function testCheckValue()
    {
        Intent::checkValue("sale");
        Intent::checkValue("authorize");
        Intent::checkValue("undefined_value");
    }
}
