<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;

class PaymentList extends AbstractModel
{
    /**
     * @JMS\Type("array<Onend\PayPal\Payment\Model\Payment>")
     *
     * @var Payment[]
     */
    protected $payments;

    /**
     * @param Payment[] $payments
     */
    public function setPayments(array $payments)
    {
        $this->payments = [];

        foreach ($payments as $payment) {
            $this->addPayment($payment);
        }
    }

    /**
     * @param Payment $payment
     */
    public function addPayment(Payment $payment)
    {
        $this->payments[] = $payment;
    }

    /**
     * @return Payment[]
     */
    public function getPayments()
    {
        return $this->payments;
    }
}
