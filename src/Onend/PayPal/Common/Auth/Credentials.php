<?php

namespace Onend\PayPal\Common\Auth;

class Credentials
{

    /**
     * @var string
     */
    protected $clientId;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @param string $clientId
     * @param string $secret
     */
    public function __construct($clientId, $secret)
    {
        $this->clientId = $clientId;
        $this->secret = $secret;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }
}
