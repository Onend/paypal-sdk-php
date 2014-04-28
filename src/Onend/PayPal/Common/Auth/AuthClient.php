<?php

namespace Onend\PayPal\Common\Auth;

use Guzzle\Http\Client;
use Onend\PayPal\Common\Enum\Endpoint;

class AuthClient extends Client
{
    /**
     * Request timeout
     * Bad Gateway
     * Service Unavailable
     * Gateway timeout
     *
     * @var array
     */
    protected static $retryCodes = [408, 502, 503, 504];

    /**
     * @var Credentials
     */
    protected $credentials;

    /**
     * @param Credentials $credentials
     */
    public function setCredentials(Credentials $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @throws \Guzzle\Common\Exception\InvalidArgumentException
     * @throws \Exception
     * @return AuthResponse
     */
    public function auth()
    {
        $request = $this->post(
            $this->getBaseUrl() . Endpoint::OAUTH_TOKEN,
            ["Accept" => "application/json", "Accept-Language" => "en_US"],
            ["grant_type" => "client_credentials"]
        );
        $request->setAuth($this->credentials->getClientId(), $this->credentials->getSecret());

        $response = parent::send($request);

        // todo retry if status code in self::$retryCode

        return new AuthResponse(json_decode($response->getBody(true), true));
    }
}
