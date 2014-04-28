<?php
namespace Onend\Tests\PayPal\Payment\Client;

use Onend\PayPal\Payment\Enum\PaymentMethod;
use Onend\PayPal\Payment\Model\Payer;
use Onend\PayPal\Payment\Model\RedirectUrl;

class PaypalPaymentClientTest extends AbstractPaymentClientTest
{
    /**
     * {@inheritdoc}
     */
    protected function createNewPayer()
    {
        $payer = new Payer();
        $payer->setPaymentMethod(PaymentMethod::PAYPAL);

        return $payer;
    }

    /**
     * {@inheritdoc}
     */
    protected function createNewPayment()
    {
        $createNewPayment = parent::createNewPayment();
        $createNewPayment->setRedirectUrls($this->createNewRedirectUrl());

        return $createNewPayment;
    }

    /**
     * @return RedirectUrl
     */
    protected function createNewRedirectUrl()
    {
        $url = new RedirectUrl();
        $url->setReturnUrl('http://localhost');
        $url->setCancelUrl('http://localhost');

        return $url;
    }
}
