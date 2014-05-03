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
     * @param CreditCard $creditCard
     */
    public function setCreditCard(CreditCard $creditCard)
    {
        $this->credit_card = $creditCard;
    }

    /**
     * @return CreditCardToken
     */
    public function getCreditCardToken()
    {
        return $this->credit_card_token;
    }

    /**
     * @param CreditCardToken $creditCardToken
     */
    public function setCreditCardToken(CreditCardToken $creditCardToken)
    {
        $this->credit_card_token = $creditCardToken;
    }
}
