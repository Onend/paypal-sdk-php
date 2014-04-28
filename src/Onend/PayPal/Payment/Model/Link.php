<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Model\AbstractModel;

class Link extends AbstractModel
{
    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $href;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $rel;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $method;

    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * @return string
     */
    public function getRel()
    {
        return $this->rel;
    }

} 
