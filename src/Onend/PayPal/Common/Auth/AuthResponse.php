<?php

namespace Onend\PayPal\Common\Auth;

class AuthResponse
{
    protected $scope = []; // todo ez nem tömb így, tömbbé kell alakítani

    protected $access_token;

    protected $token_type;

    protected $app_id;

    protected $expires_in;

    /**
     * @param array $response
     */
    public function __construct(array $response)
    {
        foreach ($response as $k => $v) {
            $this->$k = $v;
        }
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @return mixed
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }

    /**
     * @return array
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return mixed
     */
    public function getTokenType()
    {
        return $this->token_type;
    }
}
