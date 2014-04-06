<?php

namespace Onend\PayPal\Common\Auth;

class AccessToken implements AccessTokenInterface
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $tokenType;

    /**
     * @var int
     */
    private $expiresIn;

    /**
     * Token created at, it's need to check expiration
     *
     * @var int
     */
    private $createdTime;

    /**
     * API call delays and any delay between the time the token is retrieved and subsequently used
     *
     * @var int
     */
    private static $expiryBuffer = 120;

    /**
     * @var string
     */
    private $requestId;

    public function __construct()
    {
        $this->createdTime = time();
    }

    /**
     * {@inheritdoc}
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * {@inheritdoc}
     */
    public function setToken( $token )
    {
        $this->token = $token;
    }

    /**
     * {@inheritdoc}
     */
    public function setExpiresIn( $expiresIn )
    {
        $this->expiresIn = (int) $expiresIn;
    }

    /**
     * {@inheritdoc}
     */
    public function getExpiresIn()
    {
        return (int) $this->expiresIn;
    }

    /**
     * {@inheritdoc}
     */
    public function isExpired()
    {
        return ( time() - $this->createdTime ) > ( $this->getExpiresIn() - self::$expiryBuffer );
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestId()
    {
        if ( $this->requestId === null ) {
            $this->requestId = sha1( getmypid() . $this->createdTime . mt_rand( 0, 0xffff ) );
        }

        return $this->requestId;
    }

    /**
     * {@inheritdoc}
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * {@inheritdoc}
     */
    public function setTokenType( $tokenType )
    {
        $this->tokenType = $tokenType;
    }
}