<?php

namespace Onend\PayPal\Common\Factory\Client;

use Onend\PayPal\Common\Client\AbstractAuthenticatedClient;

interface ClientFactoryInterface
{
    /**
     * @return AbstractAuthenticatedClient
     */
    public function factory();
}
