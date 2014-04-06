<?php

namespace Onend\PayPal\Payment\Client;

use Onend\PayPal\Common\Client\AbstractClient;
use Onend\PayPal\Common\Enum\Endpoint;
use Onend\PayPal\Payment\Factory\PaymentResponseFactory;
use Onend\PayPal\Payment\Model\Payment;

class PaymentClient extends AbstractClient
{
    public function create( Payment $payment )
    {
        $request = $this->post( $this->getBaseUrl() . Endpoint::CREATE_PAYMENT, [
            "Content-Type" => "application/json"
        ], $payment->toJSON() );

        $response = $this->send( $request );

        return $this->factoryCreateResponse(json_decode( $response->getBody( true ), true ));
    }

    protected function factoryCreateResponse( array $response )
    {
        $factory = new PaymentResponseFactory();
        return $factory->factory($response);
    }
}