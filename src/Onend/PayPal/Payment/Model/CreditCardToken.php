<?php

namespace Onend\PayPal\Payment\Model;

use Onend\PayPal\Common\Model\AbstractModel;

class CreditCardToken extends AbstractModel
{
    /**
     * @var string
     */
    protected $credit_card_id;

    /**
     * @var string
     */
    protected $payer_id;

    /**
     * @var string
     */
    protected $last4;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $expire_year;

    /**
     * @var int
     */
    protected $expire_month;

    /**
     * @return string
     */
    public function getCreditCardId()
    {
        return $this->credit_card_id;
    }

    /**
     * @param string $credit_card_id
     */
    public function setCreditCardId( $credit_card_id )
    {
        $this->credit_card_id = $credit_card_id;
    }

    /**
     * @return int
     */
    public function getExpireMonth()
    {
        return $this->expire_month;
    }

    /**
     * @param int $expire_month
     */
    public function setExpireMonth( $expire_month )
    {
        $this->expire_month = $expire_month;
    }

    /**
     * @return int
     */
    public function getExpireYear()
    {
        return $this->expire_year;
    }

    /**
     * @param int $expire_year
     */
    public function setExpireYear( $expire_year )
    {
        $this->expire_year = $expire_year;
    }

    /**
     * @return string
     */
    public function getLast4()
    {
        return $this->last4;
    }

    /**
     * @param string $last4
     */
    public function setLast4( $last4 )
    {
        $this->last4 = $last4;
    }

    /**
     * @return string
     */
    public function getPayerId()
    {
        return $this->payer_id;
    }

    /**
     * @param string $payer_id
     */
    public function setPayerId( $payer_id )
    {
        $this->payer_id = $payer_id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType( $type )
    {
        $this->type = $type;
    }
}
