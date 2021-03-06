<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3d10b21d6ac3b31a154e3a33505e540
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3d10b21d6ac3b31a154e3a33505e540::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3d10b21d6ac3b31a154e3a33505e540::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb3d10b21d6ac3b31a154e3a33505e540::$classMap;

        }, null, ClassLoader::class);
    }
}
