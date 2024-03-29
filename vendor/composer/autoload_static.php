<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb504e495de7de13c10f479331b57d405
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'H' => 
        array (
            'Huuhu\\Huynh01410\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'Huuhu\\Huynh01410\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb504e495de7de13c10f479331b57d405::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb504e495de7de13c10f479331b57d405::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb504e495de7de13c10f479331b57d405::$classMap;

        }, null, ClassLoader::class);
    }
}
