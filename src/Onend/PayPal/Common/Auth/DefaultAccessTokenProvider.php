<?php

namespace Onend\PayPal\Common\Auth;

class DefaultAccessTokenProvider implements AccessTokenProviderInterface
{
    /**
     * @var AccessTokenInterface
     */
    protected $accessToken;

    /**
     * @var AccessTokenProviderInterface
     */
    protected $provider;

    /**
     * @var AuthClient
     */
    protected $authClient;

    // todo suuggests package for cache

    /**
     * @param AccessTokenProviderInterface $provider
     */
    public function setProvider(AccessTokenProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @param AuthClient $authClient
     */
    public function setAuthClient(AuthClient $authClient)
    {
        $this->authClient = $authClient;
    }

    /**
     * @return AccessTokenInterface
     */
    public function getAccessToken()
    {
        if ($this->hasProvider()) {
            if (($token = $this->provider->getAccessToken()) !== null) {
                $token = $this->createNewAccessToken();
                $this->provider->setAccessToken($token);
            }
        } else {
            $token = $this->createNewAccessToken();
        }

        return $token;
    }

    /**
     * @param AccessTokenInterface $accessToken
     * @return void
     */
    public function setAccessToken(AccessTokenInterface $accessToken)
    {
        if ($this->hasProvider()) {
            $this->provider->setAccessToken($accessToken);
        } else {
            $this->accessToken = $accessToken;
        }
    }

    /**
     * @return bool
     */
    protected function hasProvider()
    {
        return $this->provider instanceof AccessTokenProviderInterface;
    }

    /**
     * @return mixed
     */
    protected function createNewAccessToken()
    {
        $authResponse = $this->authClient->auth();
        $accessToken = new AccessToken();
        $accessToken->setToken($authResponse->getAccessToken());
        $accessToken->setTokenType($authResponse->getTokenType());
        $accessToken->setExpiresIn($authResponse->getExpiresIn());

        return $accessToken;
    }
}
