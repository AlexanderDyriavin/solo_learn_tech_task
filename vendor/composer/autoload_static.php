<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa4430011d4e46950044a47555e335da
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tech\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tech\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa4430011d4e46950044a47555e335da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa4430011d4e46950044a47555e335da::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
