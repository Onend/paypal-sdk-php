<?php

namespace Onend\PayPal\Common\Client;

use Guzzle\Http\Client;
use Guzzle\Http\Message\RequestInterface;

use Onend\PayPal\Common\Auth\AccessToken;
use Onend\PayPal\Common\Auth\AccessTokenInterface;
use Onend\PayPal\Common\Auth\AuthResponse;
use Onend\PayPal\Common\Auth\Credentials;
use Onend\PayPal\Common\Enum\Endpoint;

abstract class AbstractClient extends Client
{
    /**
     * Request timeout
     * Bad Gateway
     * Service Unavailable
     * Gateway timeout
     *
     * @var array
     */
    protected static $retryCodes = [ 408, 502, 503, 504 ];

    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var AccessTokenInterface
     */
    private $accessToken;

    /**
     * @param Credentials $credentials
     */
    public function setCredentials( Credentials $credentials )
    {
        $this->credentials = $credentials;
    }

    /**
     * @param AccessTokenInterface $accessToken
     */
    public function setAccessToken( AccessTokenInterface $accessToken )
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @throws \Guzzle\Common\Exception\InvalidArgumentException
     * @throws \Exception
     * @return AuthResponse
     */
    protected function auth()
    {
        $credentials = $this->credentials;

        $request = $this->post( $this->getBaseUrl() . Endpoint::OAUTH_TOKEN,
            [ "Accept" => "application/json", "Accept-Language" => "en_US", ],
            [ "grant_type" => "client_credentials" ]
        )->setAuth( $credentials->getClientId(), $credentials->getSecret() );

        $response = parent::send( $request );

        return new AuthResponse( json_decode( $response->getBody( true ), true ) );
    }

    /**
     * {@inheritdoc}
     */
    public function send( $requests )
    {
        $accessToken = $this->getAccessToken();

        if ( !( $requests instanceof RequestInterface ) ) {

            /** @var $requests RequestInterface[] */
            foreach ( $requests as &$request ) {
                $this->addTokenHeader( $request, $accessToken );
            }

            return $this->sendMultiple( $requests );
        }

        $this->addTokenHeader( $requests, $accessToken );

        return parent::send( $requests );
    }

    /**
     * @param RequestInterface $request
     * @param AccessTokenInterface $accessToken
     * @return \Guzzle\Http\Message\MessageInterface
     */
    private function addTokenHeader( RequestInterface $request, AccessTokenInterface $accessToken )
    {
        return $request->addHeader( 'Authorization', $accessToken->getTokenType() . ' ' . $accessToken->getToken() );
    }

    /**
     * @throws \Exception
     * @return AccessTokenInterface
     */
    private function getAccessToken()
    {
        $this->checkAndSetAccessTokenInstance();
        if ( $this->accessToken->isExpired() ) {
            $this->accessToken = $this->createNewAccessToken($this->auth());
        }

        return $this->accessToken;
    }

    /**
     * @param AuthResponse $authResponse
     * @return AccessTokenInterface
     */
    private function createNewAccessToken( AuthResponse $authResponse )
    {
        $accessToken = clone $this->accessToken;
        $accessToken->setToken( $authResponse->getAccessToken() );
        $accessToken->setExpiresIn($authResponse->getExpiresIn());
        $accessToken->setTokenType($authResponse->getTokenType());

        return $accessToken;
    }

    /**
     * We must define an AccessTokenInterface instance
     */
    private function checkAndSetAccessTokenInstance()
    {
        if ( ! $this->accessToken instanceof AccessTokenInterface ) {
            $this->setAccessToken( new AccessToken() );
        }
    }
}