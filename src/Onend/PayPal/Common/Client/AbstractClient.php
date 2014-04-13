<?php

namespace Onend\PayPal\Common\Client;

use Guzzle\Http\Client;
use Guzzle\Http\Message\RequestInterface;

use Onend\PayPal\Common\Auth\AccessTokenInterface;
use Onend\PayPal\Common\Auth\DefaultAccessTokenProvider;

abstract class AbstractClient extends Client
{
    /**
     * @var DefaultAccessTokenProvider
     */
    protected $provider;

    /**
     * @param DefaultAccessTokenProvider $provider
     */
    public function setProvider( DefaultAccessTokenProvider $provider )
    {
        $this->provider = $provider;
    }

    /**
     * {@inheritdoc}
     */
    public function send( $requests )
    {
        $accessToken = $this->provider->getAccessToken();

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
}