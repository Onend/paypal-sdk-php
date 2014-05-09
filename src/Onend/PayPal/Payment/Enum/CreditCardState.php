<?php

namespace Onend\PayPal\Payment\Enum;

use Onend\PayPal\Common\Enum\AbstractEnum;

class CreditCardState extends AbstractEnum
{
    const EXPIRED = "expired";
    const OK = "ok";
}
