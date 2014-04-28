<?php

namespace Onend\PayPal\Payment\Enum;

use Onend\PayPal\Common\Enum\AbstractEnum;

class PaymentMethod extends AbstractEnum
{
    const PAYPAL = "paypal";
    const CREDIT_CARD = "credit_card";
}
