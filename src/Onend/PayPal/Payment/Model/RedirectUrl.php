<?php

namespace Onend\PayPal\Payment\Model;

use Onend\PayPal\Common\Model\AbstractModel;

class RedirectUrl extends AbstractModel
{
    /**
     * @var string
     */
    protected $return_url;

    /**
     * @var string
     */
    protected $cancel_url;

    /**
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancel_url;
    }

    /**
     * @param string $cancel_url
     */
    public function setCancelUrl($cancel_url)
    {
        $this->cancel_url = $cancel_url;
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->return_url;
    }

    /**
     * @param string $return_url
     */
    public function setReturnUrl($return_url)
    {
        $this->return_url = $return_url;
    }
}
