<?php

namespace Onend\PayPal\Common\Factory\Client;

use Onend\PayPal\Common\Client\AbstractClient;

interface ClientFactoryInterface
{
    /**
     * @return AbstractClient
     */
    public function factory();
}