<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

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
     * @JMS\Exclude
     * todo related_resources "array of sale, authorization, capture, or refund, objects"
     *
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