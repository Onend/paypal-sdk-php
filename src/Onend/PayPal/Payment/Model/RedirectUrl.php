<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;
use Onend\PayPal\Common\Model\AbstractModel;

class RedirectUrl extends AbstractModel
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("return_url")
     *
     * @var string
     */
    protected $returnUrl;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("cancel_url")
     *
     * @var string
     */
    protected $cancelUrl;

    /**
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * @param string $cancelUrl
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }
}
