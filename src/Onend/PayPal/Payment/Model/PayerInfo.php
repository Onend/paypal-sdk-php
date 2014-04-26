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
    protected $payer_id;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $phone;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\ShippingAddress")
     *
     * @var ShippingAddress
     */
    protected $shipping_address;

    /**
     * @param string $email
     */
    public function setEmail( $email )
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
     * @param string $first_name
     */
    public function setFirstName( $first_name )
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName( $last_name )
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $payer_id
     */
    public function setPayerId( $payer_id )
    {
        $this->payer_id = $payer_id;
    }

    /**
     * @return string
     */
    public function getPayerId()
    {
        return $this->payer_id;
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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param ShippingAddress $shipping_address
     */
    public function setShippingAddress( ShippingAddress $shipping_address )
    {
        $this->shipping_address = $shipping_address;
    }

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }
} 
