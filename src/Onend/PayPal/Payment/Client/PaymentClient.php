<?php

namespace Onend\PayPal\Payment\Client;

use JMS\Serializer\SerializerBuilder;

use Onend\PayPal\Common\Client\AbstractClient;
use Onend\PayPal\Common\Enum\Endpoint;
use Onend\PayPal\Payment\Model\Payment;

class PaymentClient extends AbstractClient
{
    public function create( Payment $payment )
    {
        $request = $this->post( $this->getBaseUrl() . Endpoint::CREATE_PAYMENT, [
            "Content-Type" => "application/json"
        ], $payment->toJSON() );

        $response = $this->send( $request );

        $serializer = SerializerBuilder::create()->build();

        return $serializer->deserialize( $response->getBody( true ), Payment::getClass(), 'json' ); // todo ResponseFormat Enum
    }
}