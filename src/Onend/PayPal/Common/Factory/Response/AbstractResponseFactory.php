<?php

namespace Onend\PayPal\Common\Factory\Response;


use Onend\PayPal\Common\Model\AbstractModel;

abstract class AbstractResponseFactory
{
    const JSON_OBJECT = 0;
    const JSON_ARRAY = 1;

    /**
     * @param array $response
     *
     * @return \Onend\PayPal\Common\Model\AbstractModel
     */
    public function factory( array $response )
    {
        $map = $this->getFactoryMap();
        $model = $this->getResponseObject();

        foreach ( $response as $k => $v ) {

            if ( ! array_key_exists( $k, $map ) ) {

            } else {

            }
        }

        return $model;
    }

    /**
     * todo rename
     *
     * @return AbstractModel
     */
    protected abstract function getResponseObject();

    /**
     * @return array
     */
    protected abstract function getFactoryMap();
} 