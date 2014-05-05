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
     * @JMS\SerializedName("create_time")
     *
     * @var string
     */
    protected $createTime;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("update_time")
     *
     * @var string
     */
    protected $updateTime;

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
     * @JMS\SerializedName("parent_payment")
     *
     * @var string
     */
    protected $parentPayment;

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
     * @param string $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

    /**
     * @return string
     */
    public function getCreateTime()
    {
        return $this->createTime;
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
     * @param string $parentPayment
     */
    public function setParentPayment($parentPayment)
    {
        $this->parentPayment = $parentPayment;
    }

    /**
     * @return string
     */
    public function getParentPayment()
    {
        return $this->parentPayment;
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
     * @param string $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}
