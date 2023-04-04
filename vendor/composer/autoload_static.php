<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita72af293f02d4e01ae0ff228885883d8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Start\\StartBootstrap\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Start\\StartBootstrap\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita72af293f02d4e01ae0ff228885883d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita72af293f02d4e01ae0ff228885883d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita72af293f02d4e01ae0ff228885883d8::$classMap;

        }, null, ClassLoader::class);
    }
}
