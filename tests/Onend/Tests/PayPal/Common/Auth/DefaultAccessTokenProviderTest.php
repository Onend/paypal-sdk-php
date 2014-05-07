<?php
namespace Onend\Tests\PayPal\Common\Credentials;

use JMS\Serializer\SerializerBuilder;
use Onend\PayPal\Common\Auth\AuthClient;
use Onend\PayPal\Common\Auth\AuthResponse;
use Onend\PayPal\Common\Auth\DefaultAccessTokenProvider;
use Onend\PayPal\Common\Enum\RequestFormat;

class DefaultAccessTokenProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Counts how many times the auth() called on the mock auth client
     *
     * @var int
     */
    protected $authCalledTimes = 0;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->authCalledTimes = 0;
    }

    public function testGetAccessTokenWithoutProvider()
    {
        $provider = $this->getProvider();
        $this->assertEquals(0, $this->authCalledTimes);
        $accessToken = $provider->getAccessToken();
        $this->assertEquals(1, $this->authCalledTimes);

        $originalResponse = $this->getAuthResponse();
        $this->assertEquals($originalResponse->getAccessToken(), $accessToken->getToken());
        $this->assertEquals($originalResponse->getExpiresIn(), $accessToken->getExpiresIn());
        $this->assertEquals($originalResponse->getTokenType(), $accessToken->getTokenType());

        $secondCall = $provider->getAccessToken();
        $this->assertEquals(1, $this->authCalledTimes);
        $this->assertSame($accessToken, $secondCall);
    }

    public function testGetAccessTokenWithProvider()
    {
        $userProvider = $this->getBaseProviderMock();
        $this->expectGetterCalledOnce($userProvider);
        $this->expectSetterCalledOnce($userProvider);

        $provider = $this->getProvider();
        $provider->setProvider($userProvider);

        $this->assertEquals(0, $this->authCalledTimes);
        $provider->getAccessToken();
        $this->assertEquals(1, $this->authCalledTimes);
    }

    public function testSetAccessToken()
    {
        $provider = $this->getProvider();
        $token = $this->getMock('Onend\PayPal\Common\Auth\AccessTokenInterface');
        $provider->setAccessToken($token);

        $provider->getAccessToken();
        // returned from in-process cache
        $this->assertEquals(0, $this->authCalledTimes);

        $userProvider = $this->getBaseProviderMock();
        $this->expectSetterCalledOnce($userProvider);
        $provider->setProvider($userProvider);

        $provider->setAccessToken($token);
    }

    protected function getProvider()
    {
        return new DefaultAccessTokenProvider($this->getAuthClient());
    }

    /**
     * @return AuthClient
     */
    protected function getAuthClient()
    {
        $client = $this->getMock('Onend\PayPal\Common\Auth\AuthClient', ['auth']);

        $client
            ->expects($this->any())
            ->method("auth")
            ->will(
                $this->returnCallback(
                    function () {
                        $this->authCalledTimes++;

                        return $this->getAuthResponse();
                    }
                )
            );

        return $client;
    }

    /**
     * @return AuthResponse
     */
    protected function getAuthResponse()
    {
        return SerializerBuilder::create()->build()->deserialize(
            $this->getRawAuthResponse(),
            'Onend\PayPal\Common\Auth\AuthResponse',
            RequestFormat::JSON
        );
    }

    protected function getRawAuthResponse()
    {
        return file_get_contents(__DIR__ . "/fixtures/authresponse.json");
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getBaseProviderMock()
    {
        return $this->getMock('Onend\PayPal\Common\Auth\AccessTokenProviderInterface');
    }

    protected function expectGetterCalledOnce(\PHPUnit_Framework_MockObject_MockObject $userProvider)
    {
        $userProvider
            ->expects($this->once())
            ->method("getAccessToken")
            ->will($this->returnValue(null));
    }

    protected function expectSetterCalledOnce(\PHPUnit_Framework_MockObject_MockObject $userProvider)
    {
        $userProvider
            ->expects($this->once())
            ->method("setAccessToken");
    }
}
