<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;

class ItemList extends AbstractModel
{
    /**
     * @JMS\Type("array<Onend\PayPal\Payment\Model\Item>")
     *
     * @var Item[]
     */
    protected $items;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\ShippingAddress")
     * @JMS\SerializedName("shipping_address")
     *
     * @var ShippingAddress
     */
    protected $shippingAddress;

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     */
    public function setItems(array $items)
    {
        $this->items = [];

        foreach ($items as $item) {
            $this->addItem($item);
        }
    }

    /**
     * @param Item $item
     */
    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param ShippingAddress $shippingAddress
     */
    public function setShippingAddress(ShippingAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }
}
