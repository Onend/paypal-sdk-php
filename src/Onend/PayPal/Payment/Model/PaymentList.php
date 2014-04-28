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
        $this->payments = $payments;
    }

    /**
     * @return Payment[]
     */
    public function getPayments()
    {
        return $this->payments;
    }
}
