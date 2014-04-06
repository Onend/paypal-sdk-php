<?php

namespace Onend\PayPal\Common\Enum;

abstract class AbstractEnum
{
    /**
     * @var array
     */
    protected static $cache = [ ];

    /**
     * @return array
     */
    public static function keys()
    {
        return array_keys( static::values() );
    }

    /**
     * @return array
     */
    public static function values()
    {
        $class = get_called_class();

        if ( !isset( self::$cache[$class] ) ) {
            $reflected = new \ReflectionClass( $class );
            self::$cache[$class] = $reflected->getConstants();
        }

        return self::$cache[$class];
    }

    /**
     * @param $value
     *
     * @return bool
     */
    public static function hasValue( $value )
    {
        return in_array( $value, static::values() );
    }

    /**
     * @throws \InvalidArgumentException
     *
     * @param string $value
     */
    public static function checkValue( $value )
    {
        if ( !static::hasValue( $value ) ) {
            throw new \InvalidArgumentException(
                sprintf( 'The value [%s] not exists in enum [%s]', $value, get_called_class() )
            );
        }
    }
}
