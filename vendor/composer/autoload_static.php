<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70db44d12b3d97a467727427bb8caafb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mike42\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mike42\\' => 
        array (
            0 => __DIR__ . '/..' . '/mike42/gfx-php/src/Mike42',
            1 => __DIR__ . '/..' . '/mike42/escpos-php/src/Mike42',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70db44d12b3d97a467727427bb8caafb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70db44d12b3d97a467727427bb8caafb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit70db44d12b3d97a467727427bb8caafb::$classMap;

        }, null, ClassLoader::class);
    }
}
