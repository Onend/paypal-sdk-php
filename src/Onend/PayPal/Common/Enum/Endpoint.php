<?php

namespace Onend\PayPal\Common\Enum;

class Endpoint extends AbstractEnum
{
    const OAUTH_TOKEN = "v1/oauth2/token";

    // Payment
    const CREATE_PAYMENT = "v1/payments/payment";
    const EXECUTE_PAYMENT = "v1/payments/payment/{paymentId}/execute";
    const LOOKUP_PAYMENT = "v1/payments/payment/{paymentId}";
    const LIST_PAYMENTS = "v1/payments/payment";

    // Sale
}
