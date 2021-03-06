<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8aab6f6316b00d30fe4f4c311d79ea1
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8aab6f6316b00d30fe4f4c311d79ea1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8aab6f6316b00d30fe4f4c311d79ea1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
