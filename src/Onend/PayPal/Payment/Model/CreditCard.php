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
     *
     * @var string
     */
    protected $payer_id;

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
     *
     * @var int
     */
    protected $expire_month;

    /**
     * @JMS\Type("integer")
     *
     * @var int
     */
    protected $expire_year;

    /**
     * @JMS\Type("integer")
     *
     * @var int
     */
    protected $cvv2;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $first_name;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $last_name;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $valid_until;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\BillingAddress")
     *
     * @var BillingAddress
     */
    protected $billing_address;

    /**
     * @return BillingAddress
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }

    /**
     * @param BillingAddress $billingAddress
     */
    public function setBillingAddress(BillingAddress $billingAddress)
    {
        $this->billing_address = $billingAddress;
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
        return $this->expire_month;
    }

    /**
     * @param int $expireMonth
     */
    public function setExpireMonth($expireMonth)
    {
        $this->expire_month = $expireMonth;
    }

    /**
     * @return int
     */
    public function getExpireYear()
    {
        return $this->expire_year;
    }

    /**
     * @param int $expireYear
     */
    public function setExpireYear($expireYear)
    {
        $this->expire_year = $expireYear;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
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
        return $this->last_name;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
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
        return $this->payer_id;
    }

    /**
     * @param string $payerId
     */
    public function setPayerId($payerId)
    {
        $this->payer_id = $payerId;
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
        return $this->valid_until;
    }

    /**
     * @param string $validUntil
     */
    public function setValidUntil($validUntil)
    {
        $this->valid_until = $validUntil;
    }
}
