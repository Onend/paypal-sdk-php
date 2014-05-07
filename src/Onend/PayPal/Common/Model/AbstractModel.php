<?php

namespace Onend\PayPal\Common\Model;

abstract class AbstractModel
{
    /**
     * @return string
     */
    public static function getClass()
    {
        return get_called_class();
    }
}
