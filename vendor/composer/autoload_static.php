<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73846f2004636cfd22c3e166faea3846
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73846f2004636cfd22c3e166faea3846::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73846f2004636cfd22c3e166faea3846::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit73846f2004636cfd22c3e166faea3846::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
