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
     * @var
     */
    protected $credit_card_token;
} 