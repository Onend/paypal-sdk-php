<?php

error_reporting( E_ALL | E_STRICT );

$autoload = dirname( __DIR__ ) . '/vendor/autoload.php';

if ( ! is_file( $autoload ) ) {
    throw new Exception( "Run composer install motherfucker!" );
}

require $autoload;

