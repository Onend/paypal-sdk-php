<?php

namespace Onend\PayPal\Payment\Client;

use Onend\PayPal\Common\Client\AbstractClient;
use Onend\PayPal\Common\Enum\Endpoint;
use Onend\PayPal\Common\Factory\Response\AbstractResponseFactory;
use Onend\PayPal\Payment\Factory\PaymentResponseFactory;
use Onend\PayPal\Payment\Factory\Response\CreateResponseFactory;
use Onend\PayPal\Payment\Model\Payment;

class PaymentClient extends AbstractClient
{
    /**
     * @var CreateResponseFactory
     */
    protected $createFactory;

    public function create( Payment $payment )
    {
        $request = $this->post( $this->getBaseUrl() . Endpoint::CREATE_PAYMENT, [
            "Content-Type" => "application/json"
        ], $payment->toJSON() );

        $response = $this->send( $request );

        return $this->factoryCreateResponse( json_decode( $response->getBody( true ), true ) );
    }

    /**
     * @param array $response
     * @return \Onend\PayPal\Common\Model\AbstractModel
     */
    protected function factoryCreateResponse( array $response )
    {
        if ( !$this->createFactory instanceof CreateResponseFactory ) {
            $this->createFactory = new CreateResponseFactory();
        }

        return $this->createFactory->factory( $response );
    }
}