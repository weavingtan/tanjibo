<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1c8cff1a155e7831ba81f643df9cab3
{
    public static $files = array (
        '7ba3c774c30c8399e359b5ff7f3b943e' => __DIR__ . '/..' . '/tightenco/collect/src/Illuminate/Support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Illuminate\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Illuminate\\' => 
        array (
            0 => __DIR__ . '/..' . '/tightenco/collect/src/Illuminate',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1c8cff1a155e7831ba81f643df9cab3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1c8cff1a155e7831ba81f643df9cab3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
