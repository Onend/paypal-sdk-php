<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;

class FundingInstrument extends AbstractModel
{
    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\CreditCard")
     *
     * @var CreditCard
     */
    protected $credit_card;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\CreditCardToken")
     *
     * @var CreditCardToken
     */
    protected $credit_card_token;

    /**
     * @return CreditCard
     */
    public function getCreditCard()
    {
        return $this->credit_card;
    }

    /**
     * @param CreditCard $credit_card
     */
    public function setCreditCard( CreditCard $credit_card )
    {
        $this->credit_card = $credit_card;
    }

    /**
     * @return CreditCardToken
     */
    public function getCreditCardToken()
    {
        return $this->credit_card_token;
    }

    /**
     * @param CreditCardToken $credit_card_token
     */
    public function setCreditCardToken( CreditCardToken $credit_card_token )
    {
        $this->credit_card_token = $credit_card_token;
    }
}