<?php

namespace Onend\PayPal\Payment\Enum;

use Onend\PayPal\Common\Enum\AbstractEnum;

class PaymentState extends AbstractEnum
{
    const CREATED = "created";
    const APPROVED = "approved";
    const FAILED = "failed";
    const PENDING = "pending";
    const CANCELED = "canceled";
    const EXPIRED = "expired";
} 
