<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbcf410966da440d0e5d4285aad5d61c
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbcf410966da440d0e5d4285aad5d61c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbcf410966da440d0e5d4285aad5d61c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfbcf410966da440d0e5d4285aad5d61c::$classMap;

        }, null, ClassLoader::class);
    }
}
