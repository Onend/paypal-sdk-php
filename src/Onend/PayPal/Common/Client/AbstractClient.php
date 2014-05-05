<?php
namespace Onend\PayPal\Common\Client;

use Guzzle\Http\Client;
use JMS\Serializer\SerializerBuilder;

class AbstractClient extends Client {

    /**
     * @return \JMS\Serializer\Serializer
     */
    protected function getSerializer()
    {
        return SerializerBuilder::create()->build();
    }
}
