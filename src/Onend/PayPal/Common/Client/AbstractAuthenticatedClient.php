<?php

namespace Onend\PayPal\Common\Client;

use Guzzle\Http\Client;
use Guzzle\Http\Message\RequestInterface;

use JMS\Serializer\SerializerBuilder;
use Onend\PayPal\Common\Auth\AccessTokenInterface;
use Onend\PayPal\Common\Auth\DefaultAccessTokenProvider;

abstract class AbstractAuthenticatedClient extends Client
{
    /**
     * @var DefaultAccessTokenProvider
     */
    protected $provider;

    /**
     * @param DefaultAccessTokenProvider $provider
     */
    public function setProvider(DefaultAccessTokenProvider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @return \JMS\Serializer\Serializer
     */
    protected function getSerializer()
    {
        return SerializerBuilder::create()->build();
    }

    /**
     * {@inheritdoc}
     */
    public function send($requests)
    {
        $accessToken = $this->provider->getAccessToken();

        if (!($requests instanceof RequestInterface)) {

            /** @var $requests RequestInterface[] */
            foreach ($requests as &$request) {
                $this->addTokenHeader($request, $accessToken);
                $this->addJsonContentTypeHeader($request);
            }

            return $this->sendMultiple($requests);
        }

        $this->addTokenHeader($requests, $accessToken);
        $this->addJsonContentTypeHeader($requests);

        return parent::send($requests);
    }

    /**
     * @param RequestInterface $request
     * @param AccessTokenInterface $accessToken
     *
     * @return \Guzzle\Http\Message\MessageInterface
     */
    private function addTokenHeader(RequestInterface $request, AccessTokenInterface $accessToken)
    {
        return $request->addHeader('Authorization', $accessToken->getTokenType() . ' ' . $accessToken->getToken());
    }

    /**
     * @param RequestInterface $request
     *
     * @return \Guzzle\Http\Message\MessageInterface
     */
    protected function addJsonContentTypeHeader(RequestInterface $request)
    {
        return $request->addHeader('Content-Type', 'application/json');
    }
}
