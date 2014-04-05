<?php

namespace Onend\PayPal\Payment\Enum;

use Onend\PayPal\Common\Enum\AbstractEnum;

class Intent extends AbstractEnum
{
    const SALE = "sale";
    const AUTHORIZE = "authorize";
}