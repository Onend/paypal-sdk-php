<?php

namespace Onend\PayPal\Common\Client;

use Guzzle\Http\Client;

use Onend\PayPal\Common\Credentials\Credentials;
use Onend\PayPal\Common\Enum\ClientOption;

class PayPalClient extends Client
{
    /**
     * @var Credentials
     */
    protected $credentials;

    /**
     * @var string
     */
    protected $accessToken;

    public function setCredentials( Credentials $credentials )
    {
        $this->credentials = $credentials;
    }

    public function pay()
    {

    }

    /**
     * @return string
     */
    protected function getAccessToken()
    {
        if ($this->accessToken === null) {
            $this->accessToken = $this->auth();
        }

        return $this->accessToken;
    }

    /**
     * @return string
     */
    protected function auth()
    {
        $response = $this->get( $this->getBaseUrl(), [
            "auth" => [ $this->credentials->getClientId(), $this->credentials->getSecret() ]
        ] )->send();

        $body = json_decode( $response->getBody( true ), true );

        return $body[ClientOption::ACCESS_TOKEN];
    }
}