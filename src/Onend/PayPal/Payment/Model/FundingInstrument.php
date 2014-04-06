<?php

namespace Onend\PayPal\Payment\Model;

use Onend\PayPal\Common\Model\AbstractModel;

class FundingInstrument extends AbstractModel
{
    /**
     * @var CreditCard
     */
    protected $credit_card;

    /**
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