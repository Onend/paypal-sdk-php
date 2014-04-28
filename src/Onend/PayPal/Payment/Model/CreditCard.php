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
     * @param BillingAddress $billing_address
     */
    public function setBillingAddress(BillingAddress $billing_address)
    {
        $this->billing_address = $billing_address;
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
     * @param int $expire_month
     */
    public function setExpireMonth($expire_month)
    {
        $this->expire_month = $expire_month;
    }

    /**
     * @return int
     */
    public function getExpireYear()
    {
        return $this->expire_year;
    }

    /**
     * @param int $expire_year
     */
    public function setExpireYear($expire_year)
    {
        $this->expire_year = $expire_year;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
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
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
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
     * @param string $payer_id
     */
    public function setPayerId($payer_id)
    {
        $this->payer_id = $payer_id;
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
     * @param string $valid_until
     */
    public function setValidUntil($valid_until)
    {
        $this->valid_until = $valid_until;
    }
}
