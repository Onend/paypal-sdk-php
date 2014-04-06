<?php

namespace Onend\PayPal\Payment\Model;

use Onend\PayPal\Common\Model\AbstractModel;

class Amount extends AbstractModel
{
    /**
     * @var float
     */
    protected $total;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var AmountDetails
     */
    protected $details;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency( $currency )
    {
        $this->currency = $currency;
    }

    /**
     * @return AmountDetails
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param AmountDetails $details
     */
    public function setDetails( AmountDetails $details )
    {
        $this->details = $details;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return (float) $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal( $total )
    {
        $this->total = (float) $total;
    }
}