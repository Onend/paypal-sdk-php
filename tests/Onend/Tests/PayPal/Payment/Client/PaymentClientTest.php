<?php

namespace Onend\Tests\PayPal\Payment\Client;

use Guzzle\Tests\GuzzleTestCase;

use Onend\PayPal\Common\Enum\ApiBaseUrl;
use Onend\PayPal\Common\Enum\Intent;
use Onend\PayPal\Payment\Client\PaymentClient;
use Onend\PayPal\Payment\Enum\CountryCode;
use Onend\PayPal\Payment\Enum\CreditCardType;
use Onend\PayPal\Payment\Enum\PaymentMethod;
use Onend\PayPal\Payment\Model\Amount;
use Onend\PayPal\Payment\Model\AmountDetails;
use Onend\PayPal\Payment\Model\BillingAddress;
use Onend\PayPal\Payment\Model\CreditCard;
use Onend\PayPal\Payment\Model\FundingInstrument;
use Onend\PayPal\Payment\Model\Payer;
use Onend\PayPal\Payment\Model\Payment;
use Onend\PayPal\Payment\Model\Transaction;
use Onend\Tests\PayPal\Common\Credentials\CredentialsTest;

class PaymentClientTest extends GuzzleTestCase
{
    /**
     * @throws \InvalidArgumentException
     * @throws
     * @throws \Exception
     */
    public function testCreatePayment()
    {
        $client = new PaymentClient(ApiBaseUrl::SANDBOX);
        $client->setCredentials( CredentialsTest::getCredentials() );

        $response = $client->create($this->createNewPayment());
    }

    /**
     * @throws \InvalidArgumentException
     * @return Payment
     */
    protected function createNewPayment()
    {
        $payment = new Payment();
        $payment->setIntent(Intent::SALE);
        $payment->setPayer( $this->createNewPayer() );
        $payment->addTransaction( $this->createNewTransaction() );

        return $payment;
    }

    /**
     * @throws \InvalidArgumentException
     * @return Payer
     */
    protected function createNewPayer()
    {
        $payer = new Payer();

        $payer->addFundingInstrument( $this->createNewFundingInstrument() );
        $payer->setPaymentMethod(PaymentMethod::CREDIT_CARD);

        return $payer;
    }

    /**
     * @return FundingInstrument
     */
    protected function createNewFundingInstrument()
    {
        $fundingInstrument = new FundingInstrument();
        $fundingInstrument->setCreditCard( $this->createNewCreditCard() );
        return $fundingInstrument;
    }

    /**
     * @throws \InvalidArgumentException
     * @return CreditCard
     */
    protected function createNewCreditCard()
    {
        $creditCard = new CreditCard();

        $creditCard->setBillingAddress( $this->createNewBillingAddress() );
        $creditCard->setNumber( "4417119669820331" );
        $creditCard->setType( CreditCardType::VISA );
        $creditCard->setExpireMonth( 11 );
        $creditCard->setExpireYear( 2018 );
        $creditCard->setCvv2( 874 );
        $creditCard->setFirstName( "Betsy" );
        $creditCard->setLastName( "Buyer" );

        return $creditCard;
    }

    /**
     * @throws \InvalidArgumentException
     * @return BillingAddress
     */
    protected function createNewBillingAddress()
    {
        $billingAddress = new BillingAddress();

        $billingAddress->setLine1( "111 First Street" );
        $billingAddress->setCity( "Saratoga" );
        $billingAddress->setCountryCode( CountryCode::UNITED_STATES );
        $billingAddress->setPostalCode( "95070" );
        $billingAddress->setState( "CA" );

        return $billingAddress;
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
}