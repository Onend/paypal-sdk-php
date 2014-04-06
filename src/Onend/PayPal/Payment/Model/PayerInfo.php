<?php

namespace Onend\PayPal\Payment\Model;

use Onend\PayPal\Common\Model\AbstractModel;

class PayerInfo extends AbstractModel
{
    protected $email;
    protected $first_name;
    protected $last_name;
    protected $payer_id;
    protected $phone;

    /**
     * @var
     */
    protected $shipping_address;
} 