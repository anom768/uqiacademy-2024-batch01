<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18eb1f8e40a0febeba91d59ad2f7ecee
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'com\\bangkitanom\\uqi\\studios\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'com\\bangkitanom\\uqi\\studios\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit18eb1f8e40a0febeba91d59ad2f7ecee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18eb1f8e40a0febeba91d59ad2f7ecee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit18eb1f8e40a0febeba91d59ad2f7ecee::$classMap;

        }, null, ClassLoader::class);
    }
}
