<?php

namespace Onend\Tests\PayPal\Payment\Client;

use Guzzle\Tests\GuzzleTestCase;

use Onend\PayPal\Common\Enum\ApiBaseUrl;
use Onend\PayPal\Common\Enum\Intent;
use Onend\PayPal\Payment\Client\PaymentClient;
use Onend\PayPal\Payment\Model\Payer;
use Onend\PayPal\Payment\Model\Payment;
use Onend\PayPal\Payment\Model\Transaction;
use Onend\Tests\PayPal\Common\Credentials\CredentialsTest;

class PaymentClientTest extends GuzzleTestCase
{
    public function testInit()
    {
        $client = new PaymentClient(ApiBaseUrl::SANDBOX);
        $client->setCredentials( CredentialsTest::getCredentials() );

        $response = $client->create($this->createPayment());
    }

    /**
     * @throws \InvalidArgumentException
     * @return Payment
     */
    protected function createPayment()
    {
        $payment = new Payment();
        $payment->setIntent(Intent::SALE);

        $transaction = new Transaction();
        $payment->addTransaction( $transaction );

        $payer = new Payer();
        $payment->setPayer( $payer );

        return $payment;
    }
} 