<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda5f73856f3da4b007afc21cb80540bf
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'Justimmo' => 
            array (
                0 => __DIR__ . '/..' . '/justimmo/php-sdk/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda5f73856f3da4b007afc21cb80540bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda5f73856f3da4b007afc21cb80540bf::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitda5f73856f3da4b007afc21cb80540bf::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitda5f73856f3da4b007afc21cb80540bf::$classMap;

        }, null, ClassLoader::class);
    }
}
