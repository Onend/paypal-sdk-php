<?php

namespace Onend\Tests\PayPal\Payment\Client;

use Guzzle\Tests\GuzzleTestCase;

use Onend\PayPal\Common\Enum\Intent;
use Onend\PayPal\Payment\Client\PaymentClient;
use Onend\PayPal\Payment\Factory\Client\PaymentClientFactory;
use Onend\PayPal\Payment\Model\Amount;
use Onend\PayPal\Payment\Model\AmountDetails;
use Onend\PayPal\Payment\Model\Payer;
use Onend\PayPal\Payment\Model\Payment;
use Onend\PayPal\Payment\Model\Transaction;
use Onend\Tests\PayPal\Common\Credentials\CredentialsTest;

abstract class AbstractPaymentClientTest extends GuzzleTestCase
{
    /**
     * @var Payment
     */
    protected $payment;

    /**
     * @var PaymentClient
     */
    protected $client;

    protected function setUp()
    {
        parent::setUp();
        $this->client = ( new PaymentClientFactory( CredentialsTest::getCredentials() ) )->factory();
        $this->payment = $this->client->createPayment( $this->createNewPayment() );
    }

    public function testCreatePayment()
    {
        $this->assertInstanceOf( Payment::getClass(), $this->payment );
    }

    public function testLookupPayment()
    {
        $this->assertInstanceOf( Payment::getClass(), $this->client->lookupPayment( $this->payment ) );
    }

    /**
     * @throws \InvalidArgumentException
     * @return Payment
     */
    protected function createNewPayment()
    {
        $payment = new Payment();
        $payment->setIntent( Intent::SALE );
        $payment->setPayer( $this->createNewPayer() );
        $payment->addTransaction( $this->createNewTransaction() );

        return $payment;
    }

    /**
     * @return Transaction
     */
    protected function createNewTransaction()
    {
        $transaction = new Transaction();

        $transaction->setAmount( $this->createNewAmount() );
        $transaction->setDescription( "This is the payment transaction description." );

        return $transaction;
    }

    /**
     * @return Amount
     */
    protected function createNewAmount()
    {
        $amount = new Amount();

        $amount->setTotal( "7.47" );
        $amount->setCurrency( "USD" );
        $amount->setDetails( $this->createNewAmountDetails() );

        return $amount;
    }

    /**
     * @return AmountDetails
     */
    protected function createNewAmountDetails()
    {
        $details = new AmountDetails();

        $details->setTax( "0.03" );
        $details->setSubtotal( "7.41" );
        $details->setShipping( "0.03" );

        return $details;
    }

    /**
     * @return Payer
     */
    protected abstract function createNewPayer();
}
