<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;
use Onend\PayPal\Common\Model\AbstractModel;

class CreditCardToken extends AbstractModel
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("credit_card_id")
     *
     * @var string
     */
    protected $creditCardId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("payer_id")
     *
     * @var string
     */
    protected $payerId;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $last4;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $type;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedNamew("expire_year")
     *
     * @var int
     */
    protected $expireYear;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("expire_month")
     *
     * @var int
     */
    protected $expireMonth;

    /**
     * @return string
     */
    public function getCreditCardId()
    {
        return $this->creditCardId;
    }

    /**
     * @param string $creditCardId
     */
    public function setCreditCardId($creditCardId)
    {
        $this->creditCardId = $creditCardId;
    }

    /**
     * @return int
     */
    public function getExpireMonth()
    {
        return $this->expireMonth;
    }

    /**
     * @param int $expireMonth
     */
    public function setExpireMonth($expireMonth)
    {
        $this->expireMonth = $expireMonth;
    }

    /**
     * @return int
     */
    public function getExpireYear()
    {
        return $this->expireYear;
    }

    /**
     * @param int $expireYear
     */
    public function setExpireYear($expireYear)
    {
        $this->expireYear = $expireYear;
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
        return $this->payerId;
    }

    /**
     * @param string $payerId
     */
    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;
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
