<?php

namespace Onend\PayPal\Payment\Enum;

use Onend\PayPal\Common\Enum\AbstractEnum;

class CreditCardType extends AbstractEnum
{
    const VISA = "visa";
    const MASTERCARD = "mastercard";
    const DISCOVER = "discover";
    const AMEX = "amex";
}
