<?php

namespace Onend\PayPal\Payment\Factory;

use Onend\PayPal\Common\Factory\AbstractResponseFactory;
use Onend\PayPal\Payment\Model\Amount;
use Onend\PayPal\Payment\Model\AmountDetails;
use Onend\PayPal\Payment\Model\BillingAddress;
use Onend\PayPal\Payment\Model\CreditCard;
use Onend\PayPal\Payment\Model\FundingInstrument;
use Onend\PayPal\Payment\Model\Payer;
use Onend\PayPal\Payment\Model\Payment;
use Onend\PayPal\Payment\Model\Transaction;

class PaymentResponseFactory extends AbstractResponseFactory
{
    protected function getFactoryMap()
    {
        return [
            "payer" => [
                "class" => Payer::getClass(),
            ],
            "funding_instruments" => [
                "class" => FundingInstrument::getClass(),
                "credit_card" => [
                    "class" => CreditCard::getClass(),
                    "billing_address" => [
                        "class" => BillingAddress::getClass()
                    ],
                ],
            ],
            "transactions" => [
                "class" => Transaction::getClass(),
                "type" => self::JSON_ARRAY,
                "amount" => [
                    "class" => Amount::getClass(),
                    "details" => AmountDetails::getClass(),
                ],
            ],

        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getResponseObject()
    {
        return new Payment();
    }
}