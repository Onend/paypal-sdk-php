<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\JsonDeserializationVisitor;

use Onend\PayPal\Common\Model\AbstractModel;

class Transaction extends AbstractModel
{
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
    protected $description;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\ItemList")
     *
     * @var ItemList
     */
    protected $item_list;

    /**
     * @JMS\Type("array<Onend\PayPal\Payment\Model\RelatedResources>")
     *
     * @var AbstractRelatedResource[]
     */
    protected $related_resources;

    /**
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     */
    public function setAmount( Amount $amount )
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription( $description )
    {
        $this->description = $description;
    }

    /**
     * @param \Onend\PayPal\Payment\Model\ItemList $item_list
     */
    public function setItemList( \Onend\PayPal\Payment\Model\ItemList $item_list )
    {
        $this->item_list = $item_list;
    }

    /**
     * @return \Onend\PayPal\Payment\Model\ItemList
     */
    public function getItemList()
    {
        return $this->item_list;
    }

    /**
     * @param AbstractRelatedResource[] $related_resources
     */
    public function setRelatedResources( array $related_resources )
    {
        $this->related_resources = $related_resources;
    }

    /**
     * @return AbstractRelatedResource[]
     */
    public function getRelatedResources()
    {
        return $this->related_resources;
    }
}
