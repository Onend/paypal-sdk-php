<?php

namespace Onend\PayPal\Payment\Model;

use Onend\PayPal\Common\Model\AbstractModel;

class Payment extends AbstractModel
{
    /**
     * @var Payer
     */
    protected $payer;

    /**
     * @var array
     */
    protected $fundingInstruments;
} 