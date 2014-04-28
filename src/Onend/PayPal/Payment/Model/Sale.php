<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

class Sale extends AbstractRelatedResource
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
    protected $create_time;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $update_time;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $state;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\Amount")
     *
     * @var Amount
     */
    protected $amount;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $parent_payment;

    /**
     * @JMS\Type("array<Onend\PayPal\Payment\Model\Link>")
     *
     * @var array
     */
    protected $links;

    /**
     * @param Amount $amount
     */
    public function setAmount(Amount $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $create_time
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;
    }

    /**
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Link[] $links
     */
    public function setLinks(array $links)
    {
        $this->links = $links;
    }

    /**
     * @return Link[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param string $parent_payment
     */
    public function setParentPayment($parent_payment)
    {
        $this->parent_payment = $parent_payment;
    }

    /**
     * @return string
     */
    public function getParentPayment()
    {
        return $this->parent_payment;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $update_time
     */
    public function setUpdateTime($update_time)
    {
        $this->update_time = $update_time;
    }

    /**
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }
}
