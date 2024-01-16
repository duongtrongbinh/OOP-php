<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c446f584f7115cb908730d5406d8e22
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c446f584f7115cb908730d5406d8e22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c446f584f7115cb908730d5406d8e22::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c446f584f7115cb908730d5406d8e22::$classMap;

        }, null, ClassLoader::class);
    }
}