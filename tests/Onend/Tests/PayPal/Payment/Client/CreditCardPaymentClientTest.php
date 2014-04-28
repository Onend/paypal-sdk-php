<?php

namespace Onend\Tests\PayPal\Payment\Client;

use Onend\PayPal\Payment\Enum\CountryCode;
use Onend\PayPal\Payment\Enum\CreditCardType;
use Onend\PayPal\Payment\Enum\PaymentMethod;
use Onend\PayPal\Payment\Model\BillingAddress;
use Onend\PayPal\Payment\Model\CreditCard;
use Onend\PayPal\Payment\Model\FundingInstrument;
use Onend\PayPal\Payment\Model\Payer;
use Onend\PayPal\Payment\Model\Payment;

class CreditCardPaymentClientTest extends AbstractPaymentClientTest
{
    public function testExecutePayment()
    {
        //$this->assertInstanceOf( Payment::getClass(), $this->client->executePayment( $this->payment ) );
    }

    /**
     * @throws \InvalidArgumentException
     * @return Payer
     */
    protected function createNewPayer()
    {
        $payer = new Payer();

        $payer->addFundingInstrument($this->createNewFundingInstrument());
        $payer->setPaymentMethod(PaymentMethod::CREDIT_CARD);

        return $payer;
    }

    /**
     * @return FundingInstrument
     */
    protected function createNewFundingInstrument()
    {
        $fundingInstrument = new FundingInstrument();

        $fundingInstrument->setCreditCard($this->createNewCreditCard());

        return $fundingInstrument;
    }

    /**
     * @throws \InvalidArgumentException
     * @return CreditCard
     */
    protected function createNewCreditCard()
    {
        $creditCard = new CreditCard();

        $creditCard->setBillingAddress($this->createNewBillingAddress());
        $creditCard->setNumber("4417119669820331");
        $creditCard->setType(CreditCardType::VISA);
        $creditCard->setExpireMonth(11);
        $creditCard->setExpireYear(2018);
        $creditCard->setCvv2(874);
        $creditCard->setFirstName("Betsy");
        $creditCard->setLastName("Buyer");

        return $creditCard;
    }

    /**
     * @throws \InvalidArgumentException
     * @return BillingAddress
     */
    protected function createNewBillingAddress()
    {
        $billingAddress = new BillingAddress();

        $billingAddress->setLine1("111 First Street");
        $billingAddress->setCity("Saratoga");
        $billingAddress->setCountryCode(CountryCode::UNITED_STATES);
        $billingAddress->setPostalCode("95070");
        $billingAddress->setState("CA");

        return $billingAddress;
    }
}
