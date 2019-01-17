<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e2fefa7a266104303ecc8992be8508e
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e2fefa7a266104303ecc8992be8508e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e2fefa7a266104303ecc8992be8508e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4e2fefa7a266104303ecc8992be8508e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
