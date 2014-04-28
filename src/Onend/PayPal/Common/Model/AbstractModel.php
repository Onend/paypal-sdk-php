<?php

namespace Onend\PayPal\Common\Model;

abstract class AbstractModel
{
    public function toJSON()
    {
        return json_encode($this->toArray());
    }

    public function toArray()
    {
        return $this->convertToArray(get_object_vars($this));
    }

    protected function convertToArray($param)
    {
        $ret = [];
        foreach ($param as $k => $v) {

            if ($v instanceof AbstractModel) {
                $ret[$k] = $v->toArray();
            } else {
                if (is_array($v)) {
                    $ret[$k] = $this->convertToArray($v);
                } else {
                    if ($v !== null) {
                        $ret[$k] = $v;
                    }
                }
            }
        }

        return $ret;
    }


    /**
     * @return string
     */
    public static function getClass()
    {
        return get_called_class();
    }
}
