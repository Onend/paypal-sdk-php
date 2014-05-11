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
     * @JMS\SerializedName("item_list")
     *
     * @var ItemList
     */
    protected $itemList;

    /**
     * @JMS\Type("array<Onend\PayPal\Payment\Model\RelatedResources>")
     * @JMS\SerializedName("related_resources")
     *
     * @var AbstractRelatedResource[]
     */
    protected $relatedResources;

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
    public function setAmount(Amount $amount)
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
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param ItemList $itemList
     */
    public function setItemList(ItemList $itemList)
    {
        $this->itemList = $itemList;
    }

    /**
     * @return ItemList
     */
    public function getItemList()
    {
        return $this->itemList;
    }

    /**
     * @param AbstractRelatedResource[] $relatedResources
     */
    public function setRelatedResources(array $relatedResources)
    {
        $this->relatedResources = $relatedResources;
    }

    /**
     * @return AbstractRelatedResource[]
     */
    public function getRelatedResources()
    {
        return $this->relatedResources;
    }
}
