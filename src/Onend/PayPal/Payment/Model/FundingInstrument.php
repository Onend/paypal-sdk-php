<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;

class FundingInstrument extends AbstractModel
{
    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\CreditCard")
     * @JMS\SerializedName("credit_card")
     *
     * @var CreditCard
     */
    protected $creditCard;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\CreditCardToken")
     * @JMS\SerializedName("credit_card_token")
     *
     * @var CreditCardToken
     */
    protected $creditCardToken;

    /**
     * @return CreditCard
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * @param CreditCard $creditCard
     */
    public function setCreditCard(CreditCard $creditCard)
    {
        $this->creditCard = $creditCard;
    }

    /**
     * @return CreditCardToken
     */
    public function getCreditCardToken()
    {
        return $this->creditCardToken;
    }

    /**
     * @param CreditCardToken $creditCardToken
     */
    public function setCreditCardToken(CreditCardToken $creditCardToken)
    {
        $this->creditCardToken = $creditCardToken;
    }
}
