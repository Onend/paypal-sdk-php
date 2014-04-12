<?php

namespace Onend\PayPal\Payment\Factory\Response;

use Onend\PayPal\Common\Factory\Response\AbstractResponseFactory;
use Onend\PayPal\Payment\Model\Amount;
use Onend\PayPal\Payment\Model\AmountDetails;
use Onend\PayPal\Payment\Model\BillingAddress;
use Onend\PayPal\Payment\Model\CreditCard;
use Onend\PayPal\Payment\Model\FundingInstrument;
use Onend\PayPal\Payment\Model\Payer;
use Onend\PayPal\Payment\Model\Payment;
use Onend\PayPal\Payment\Model\Transaction;

class CreateResponseFactory extends AbstractResponseFactory
{
    protected function getFactoryMap()
    {
        return [
            "payer" => [
                "class" => Payer::getClass(),
                "funding_instruments" => [
                    "class" => FundingInstrument::getClass(),
                    "type" => self::JSON_ARRAY,
                    "credit_card" => [
                        "class" => CreditCard::getClass(),
                        "billing_address" => [
                            "class" => BillingAddress::getClass()
                        ],
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
                "realted_resources" => [

                ]
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