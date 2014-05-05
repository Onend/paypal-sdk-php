<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;
use Onend\PayPal\Payment\Enum\PaymentMethod;

class Payer extends AbstractModel
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("payment_method")
     *
     * @var string
     */
    protected $paymentMethod;

    /**
     * @JMS\Type("array<Onend\PayPal\Payment\Model\FundingInstrument>")
     * @JMS\SerializedName("funding_instruments")
     *
     * @var FundingInstrument[]
     */
    protected $fundingInstruments;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\PayerInfo")
     * @JMS\SerializedName("payer_info")
     *
     * @var PayerInfo
     */
    protected $payerInfo;

    /**
     * @return FundingInstrument[]
     */
    public function getFundingInstruments()
    {
        return $this->fundingInstruments;
    }

    /**
     * @param FundingInstrument[] $fundingInstruments
     */
    public function setFundingInstruments(array $fundingInstruments)
    {
        foreach ($fundingInstruments as $fundingInstrument) {
            $this->addFundingInstrument($fundingInstrument);
        }
    }

    /**
     * @param FundingInstrument $fundingInstrument
     */
    public function addFundingInstrument(FundingInstrument $fundingInstrument)
    {
        $this->fundingInstruments[] = $fundingInstrument;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     * @throws \InvalidArgumentException
     */
    public function setPaymentMethod($paymentMethod)
    {
        PaymentMethod::checkValue($paymentMethod);
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return PayerInfo
     */
    public function getPayerInfo()
    {
        return $this->payerInfo;
    }

    /**
     * @param PayerInfo $payerInfo
     */
    public function setPayerInfo(PayerInfo $payerInfo)
    {
        $this->payerInfo = $payerInfo;
    }
}
