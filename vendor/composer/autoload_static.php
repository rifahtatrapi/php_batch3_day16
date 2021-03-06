<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffbb048d378e6cbad93c0e594e0ee48c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitffbb048d378e6cbad93c0e594e0ee48c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffbb048d378e6cbad93c0e594e0ee48c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitffbb048d378e6cbad93c0e594e0ee48c::$classMap;

        }, null, ClassLoader::class);
    }
}
