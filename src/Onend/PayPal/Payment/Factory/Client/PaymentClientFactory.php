<?php

namespace Onend\PayPal\Payment\Factory\Client;

use Onend\PayPal\Common\Factory\Client\AbstractClientFactory;
use Onend\PayPal\Payment\Client\PaymentClient;

class PaymentClientFactory extends AbstractClientFactory
{
    /**
     * {@inheritdoc}
     */
    public function factory()
    {
        $paymentClient = new PaymentClient($this->baseUrl);
        $paymentClient->setProvider($this->accessTokenProvider);

        return $paymentClient;
    }
}
