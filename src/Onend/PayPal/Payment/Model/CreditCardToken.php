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
     * @param string $creditCardId
     */
    public function setCreditCardId($creditCardId)
    {
        $this->credit_card_id = $creditCardId;
    }

    /**
     * @return int
     */
    public function getExpireMonth()
    {
        return $this->expire_month;
    }

    /**
     * @param int $expireMonth
     */
    public function setExpireMonth($expireMonth)
    {
        $this->expire_month = $expireMonth;
    }

    /**
     * @return int
     */
    public function getExpireYear()
    {
        return $this->expire_year;
    }

    /**
     * @param int $expireYear
     */
    public function setExpireYear($expireYear)
    {
        $this->expire_year = $expireYear;
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
    public function setLast4($last4)
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
     * @param string $payerId
     */
    public function setPayerId($payerId)
    {
        $this->payer_id = $payerId;
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
    public function setType($type)
    {
        $this->type = $type;
    }
}
