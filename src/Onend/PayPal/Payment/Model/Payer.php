<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;
use Onend\PayPal\Payment\Enum\PaymentMethod;

class Payer extends AbstractModel
{
    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $payment_method;

    /**
     * @JMS\Type("array<Onend\PayPal\Payment\Model\FundingInstrument>")
     *
     * @var FundingInstrument[]
     */
    protected $funding_instruments;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\PayerInfo")
     *
     * @var PayerInfo
     */
    protected $payer_info;

    /**
     * @return FundingInstrument[]
     */
    public function getFundingInstruments()
    {
        return $this->funding_instruments;
    }

    /**
     * @param FundingInstrument[] $funding_instruments
     */
    public function setFundingInstruments( array $funding_instruments )
    {
        foreach ( $funding_instruments as $funding_instrument ) {
            $this->addFundingInstrument($funding_instrument);
        }
    }

    /**
     * @param FundingInstrument $funding_instrument
     */
    public function addFundingInstrument( FundingInstrument $funding_instrument )
    {
        $this->funding_instruments[] = $funding_instrument;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * @param mixed $payment_method
     * @throws \InvalidArgumentException
     */
    public function setPaymentMethod( $payment_method )
    {
        PaymentMethod::checkValue($payment_method);
        $this->payment_method = $payment_method;
    }

    /**
     * @return PayerInfo
     */
    public function getPayerInfo()
    {
        return $this->payer_info;
    }

    /**
     * @param PayerInfo $payer_info
     */
    public function setPayerInfo( PayerInfo $payer_info )
    {
        $this->payer_info = $payer_info;
    }
}