<?php

namespace Onend\PayPal\Payment\Model;

use Onend\PayPal\Common\Model\AbstractModel;

class AmountDetails extends AbstractModel
{
    /**
     * @var float
     */
    protected $subtotal;

    /**
     * @var float
     */
    protected $tax;

    /**
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