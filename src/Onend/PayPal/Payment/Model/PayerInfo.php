<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;

class PayerInfo extends AbstractModel
{
    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $email;

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
    protected $phone;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\ShippingAddress")
     * @JMS\SerializedName("shipping_address")
     *
     * @var ShippingAddress
     */
    protected $shippingAddress;

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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
    public function getFirstName()
    {
        return $this->firstName;
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
    public function getLastName()
    {
        return $this->lastName;
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
    public function getPayerId()
    {
        return $this->payerId;
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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param ShippingAddress $shippingAddress
     */
    public function setShippingAddress(ShippingAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }
}
