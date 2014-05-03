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
     * @param FundingInstrument[] $fundingInstruments
     */
    public function setFundingInstruments(array $fundingInstruments)
    {
        foreach ($fundingInstruments as $funding_instrument) {
            $this->addFundingInstrument($funding_instrument);
        }
    }

    /**
     * @param FundingInstrument $fundingInstrument
     */
    public function addFundingInstrument(FundingInstrument $fundingInstrument)
    {
        $this->funding_instruments[] = $fundingInstrument;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * @param mixed $paymentMethod
     * @throws \InvalidArgumentException
     */
    public function setPaymentMethod($paymentMethod)
    {
        PaymentMethod::checkValue($paymentMethod);
        $this->payment_method = $paymentMethod;
    }

    /**
     * @return PayerInfo
     */
    public function getPayerInfo()
    {
        return $this->payer_info;
    }

    /**
     * @param PayerInfo $payerInfo
     */
    public function setPayerInfo(PayerInfo $payerInfo)
    {
        $this->payer_info = $payerInfo;
    }
}
