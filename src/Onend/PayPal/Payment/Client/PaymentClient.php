<?php

namespace Onend\PayPal\Payment\Client;

use Guzzle\Http\Message\Response;

use Onend\PayPal\Common\Client\AbstractAuthenticatedClient;
use Onend\PayPal\Common\Enum\Endpoint;
use Onend\PayPal\Common\Enum\RequestFormat;
use Onend\PayPal\Payment\Model\Payment;
use Onend\PayPal\Payment\Model\PaymentList;

class PaymentClient extends AbstractAuthenticatedClient
{
    /**
     * Create a payment
     *
     * @param Payment $payment
     *
     * @return Payment
     */
    public function createPayment(Payment $payment)
    {
        $request = $this->post(Endpoint::CREATE_PAYMENT, [], $this->getSerializer()->serialize($payment, RequestFormat::JSON));
        $response = $this->send($request);

        return $this->factoryPaymentResponse($response);
    }

    /**
     * Execute an approved PayPal payment
     *
     * @param Payment $payment
     *
     * @return Payment
     */
    public function executePayment(Payment $payment)
    {
        $data = json_encode(["payer_id" => $payment->getPayer()->getPayerInfo()->getPayerId()]);
        $request = $this->post(Endpoint::EXECUTE_PAYMENT, null, $data, ["paymenId" => $payment->getId()]);
        $response = $this->send($request);

        return $this->factoryPaymentResponse($response);
    }

    /**
     * Look up a payment resource
     *
     * @param Payment $payment
     *
     * @return Payment
     */
    public function lookupPayment(Payment $payment)
    {
        $request = $this->get(Endpoint::LOOKUP_PAYMENT, null, ["paymenId" => $payment->getId()]);
        $response = $this->send($request);

        return $this->factoryPaymentResponse($response);
    }

    /**
     * @return PaymentList
     */
    public function listPayments()
    {
        $request = $this->get(Endpoint::LIST_PAYMENTS);
        $response = $this->send($request);

        return $this->getSerializer()->deserialize(
            $response->getBody(true),
            PaymentList::getClass(),
            RequestFormat::JSON
        );
    }

    /**
     * @param $response
     *
     * @return Payment
     */
    protected function factoryPaymentResponse(Response $response)
    {
        return $this->getSerializer()->deserialize($response->getBody(true), Payment::getClass(), RequestFormat::JSON);
    }
}
