<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;

class CreditCard extends AbstractModel
{
    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $id;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("payer_id")
     *
     * @var string
     */
    protected $payerId;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $number;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $type;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("expire_month")
     *
     * @var int
     */
    protected $expireMonth;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("expire_year")
     *
     * @var int
     */
    protected $expireYear;

    /**
     * @JMS\Type("integer")
     *
     * @var int
     */
    protected $cvv2;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("first_name")
     *
     * @var string
     */
    protected $firstName;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("last_name")
     *
     * @var string
     */
    protected $lastName;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("valid_until")
     *
     * @var string
     */
    protected $validUntil;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\BillingAddress")
     * @JMS\SerializedName("billing_address")
     *
     * @var BillingAddress
     */
    protected $billingAddress;

    /**
     * @return BillingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param BillingAddress $billingAddress
     */
    public function setBillingAddress(BillingAddress $billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return int
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }

    /**
     * @param int $cvv2
     */
    public function setCvv2($cvv2)
    {
        $this->cvv2 = $cvv2;
    }

    /**
     * @return int
     */
    public function getExpireMonth()
    {
        return $this->expireMonth;
    }

    /**
     * @param int $expireMonth
     */
    public function setExpireMonth($expireMonth)
    {
        $this->expireMonth = $expireMonth;
    }

    /**
     * @return int
     */
    public function getExpireYear()
    {
        return $this->expireYear;
    }

    /**
     * @param int $expireYear
     */
    public function setExpireYear($expireYear)
    {
        $this->expireYear = $expireYear;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * @param string $payerId
     */
    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param string $validUntil
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
    }
}
