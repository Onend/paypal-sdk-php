<?php

namespace Onend\PayPal\Common\Factory\Client;

use Onend\PayPal\Common\Auth\AccessTokenProviderInterface;
use Onend\PayPal\Common\Auth\AuthClient;
use Onend\PayPal\Common\Auth\Credentials;
use Onend\PayPal\Common\Auth\DefaultAccessTokenProvider;
use Onend\PayPal\Common\Enum\ApiBaseUrl;

abstract class AbstractClientFactory implements ClientFactoryInterface
{
    /**
     * @var \Onend\PayPal\Common\Auth\Credentials
     */
    protected $credentials;

    /**
     * @var AccessTokenProviderInterface
     */
    protected $accessTokenProvider;

    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @param Credentials $credentials
     * @param string $baseUrl
     */
    public function __construct( Credentials $credentials, $baseUrl = ApiBaseUrl::SANDBOX )
    {
        $this->baseUrl = $baseUrl;
        $this->credentials = $credentials;
        $authClient = new AuthClient( $baseUrl );
        $authClient->setCredentials( $credentials );
        $this->accessTokenProvider = new DefaultAccessTokenProvider();
        $this->accessTokenProvider->setAuthClient( $authClient );
    }

    /**
     * @param AccessTokenProviderInterface $accessTokenProvider
     */
    public function setAccessTokenProvider( AccessTokenProviderInterface $accessTokenProvider )
    {
        $this->accessTokenProvider->setProvider( $accessTokenProvider );
    }
}