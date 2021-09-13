<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f372bedb978af9b25e39de49b5f55a5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f372bedb978af9b25e39de49b5f55a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f372bedb978af9b25e39de49b5f55a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f372bedb978af9b25e39de49b5f55a5::$classMap;

        }, null, ClassLoader::class);
    }
}