<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae9b193e86a4f0569e3fe16356cd3e3e
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Boldgrid\\Library\\Util\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Boldgrid\\Library\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/boldgrid/library/src/Util',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae9b193e86a4f0569e3fe16356cd3e3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae9b193e86a4f0569e3fe16356cd3e3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
