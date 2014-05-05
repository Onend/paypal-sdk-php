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
     * @JMS\SerializedName("country_code")
     *
     * @var string
     */
    protected $countryCode;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("postal_code")
     *
     * @var string
     */
    protected $postalCode;

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
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @throws \InvalidArgumentException
     */
    public function setCountryCode($countryCode)
    {
        CountryCode::checkValue($countryCode);
        $this->countryCode = $countryCode;
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
    public function setLine1($line1)
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
    public function setLine2($line2)
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
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
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
    public function setState($state)
    {
        $this->state = $state;
    }
}
