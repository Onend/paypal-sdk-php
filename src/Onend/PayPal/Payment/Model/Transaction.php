<?php

namespace Onend\PayPal\Payment\Model;

use Onend\PayPal\Common\Model\AbstractModel;

class Transaction extends AbstractModel
{
    /**
     * @var Amount
     */
    protected $amount;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var ItemList
     */
    protected $item_list;

    /**
     * @var array
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
}