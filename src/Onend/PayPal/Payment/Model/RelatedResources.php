<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;

class RelatedResources extends AbstractModel
{
    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\Sale")
     * @JMS\Accessor(getter="getResource",setter="setResource")
     *
     * @var Sale
     */
    protected $sale;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\Capture")
     * @JMS\Accessor(getter="getResource",setter="setResource")
     *
     * @var Capture
     */
    protected $capture;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\Refund")
     * @JMS\Accessor(getter="getResource",setter="setResource")
     *
     * @var Refund
     */
    protected $refund;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\Authorization")
     * @JMS\Accessor(getter="getResource",setter="setResource")
     *
     * @var Authorization
     */
    protected $authorization;

    /**
     * @JMS\Exclude
     *
     * @var AbstractRelatedResource
     */
    protected $resource;

    /**
     * @param AbstractRelatedResource $resource
     */
    public function setResource(AbstractRelatedResource $resource)
    {
        $this->resource = $resource;
    }

    /**
     * @return AbstractRelatedResource
     */
    public function getResource()
    {
        return $this->resource;
    }
}
