<?php

namespace Onend\PayPal\Common\Auth;

use JMS\Serializer\Annotation as JMS;

class AuthResponse
{
    /**
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getFlatScope",setter="setFlatScope")
     *
     * @var string[]
     */
    protected $scope = [];

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("access_token")
     *
     * @var string
     */
    protected $accessToken;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("token_type")
     *
     * @var string
     */
    protected $tokenType;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("app_id")
     *
     * @var string
     */
    protected $appId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("expires_in")
     *
     * @var int
     */
    protected $expiresIn;

    /**
     * @param string $scope
     */
    public function setFlatScope($scope)
    {
        $this->scope = explode(' ', (string)$scope);
    }

    /**
     * @return string
     */
    public function getFlatScope()
    {
        return implode(' ', $this->scope);
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @return array
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }
}
