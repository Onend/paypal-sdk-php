<?php

namespace Onend\PayPal\Common\Auth;

interface AccessTokenInterface
{
    /**
     * The access token issued by PayPal.
     * The access token will expire (see expires_in), after which you’ll have to request a new access token.
     *
     * @return string
     */
    public function getToken();

    /**
     * @param $token
     * @return void
     */
    public function setToken($token);

    /**
     * The type of the token issued as described in OAuth2.0.
     * Value is case insensitive.
     *
     * @see http://tools.ietf.org/html/rfc6749#section-7.1
     *
     * @return string
     */
    public function getTokenType();

    /**
     * @param $tokenType
     * @return void
     */
    public function setTokenType($tokenType);

    /**
     * The lifetime in seconds of the access token.
     *
     * @return int
     */
    public function getExpiresIn();

    /**
     * @param int $expiresIn
     * @return void
     */
    public function setExpiresIn($expiresIn);

    /**
     * @return bool
     */
    public function isExpired();

    /**
     * Contains a unique ID that you generate that can be used for enforcing idempotency.
     * Omitting this header increases the risk of duplicate transactions.
     *
     * @return string
     */
    public function getRequestId();
}
