<?php

namespace Onend\PayPal\Payment\Model;

use Onend\PayPal\Common\Model\AbstractModel;

class ItemList extends AbstractModel
{
    /**
     * @var Item[]
     */
    protected $items;

    /**
     * @var ShippingAddress
     */
    protected $shipping_address;

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     */
    public function setItems( array $items )
    {
        foreach ( $items as $item ) {
            $this->addItem($item);
        }
    }

    /**
     * @param Item $item
     */
    public function addItem( Item $item )
    {
        $this->items[] = $item;
    }

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    /**
     * @param ShippingAddress $shipping_address
     */
    public function setShippingAddress( ShippingAddress $shipping_address )
    {
        $this->shipping_address = $shipping_address;
    }
} 