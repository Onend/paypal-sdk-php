<?php

namespace Onend\PayPal\Common\Auth;

interface AccessTokenProviderInterface
{

    /**
     * @return AccessTokenInterface
     */
    public function getAccessToken();

    /**
     * @param AccessTokenInterface $accessToken
     * @return void
     */
    public function setAccessToken(AccessTokenInterface $accessToken);
}
