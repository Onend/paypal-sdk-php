<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;

class AmountDetails extends AbstractModel
{
    /**
     * @JMS\Type("float")
     *
     * @var float
     */
    protected $subtotal;

    /**
     * @JMS\Type("float")
     *
     * @var float
     */
    protected $tax;

    /**
     * @JMS\Type("float")
     *
     * @var float
     */
    protected $shipping;

    /**
     * @return float
     */
    public function getShipping()
    {
        return (float) $this->shipping;
    }

    /**
     * @param float $shipping
     */
    public function setShipping( $shipping )
    {
        $this->shipping = (float) $shipping;
    }

    /**
     * @return float
     */
    public function getSubtotal()
    {
        return (float) $this->subtotal;
    }

    /**
     * @param float $subtotal
     */
    public function setSubtotal( $subtotal )
    {
        $this->subtotal = (float) $subtotal;
    }

    /**
     * @return float
     */
    public function getTax()
    {
        return (float) $this->tax;
    }

    /**
     * @param float $tax
     */
    public function setTax( $tax )
    {
        $this->tax = (float) $tax;
    }
}