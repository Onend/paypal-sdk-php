<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;
use Onend\PayPal\Payment\Enum\CountryCode;

abstract class AbstractAddress extends AbstractModel
{
    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $line1;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $line2;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $city;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $country_code;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $postal_code;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $state;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $phone;

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity( $city )
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param string $country_code
     * @throws \InvalidArgumentException
     */
    public function setCountryCode( $country_code )
    {
        CountryCode::checkValue($country_code);
        $this->country_code = $country_code;
    }

    /**
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * @param string $line1
     */
    public function setLine1( $line1 )
    {
        $this->line1 = $line1;
    }

    /**
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * @param string $line2
     */
    public function setLine2( $line2 )
    {
        $this->line2 = $line2;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone( $phone )
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * @param string $postal_code
     */
    public function setPostalCode( $postal_code )
    {
        $this->postal_code = $postal_code;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState( $state )
    {
        $this->state = $state;
    }

} 