<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5750fad4c89343f70e90670029fdffe3
{
    public static $prefixLengthsPsr4 = array (
        'B' =>
        array (
            'Banner_Image\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Banner_Image\\' =>
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5750fad4c89343f70e90670029fdffe3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5750fad4c89343f70e90670029fdffe3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5750fad4c89343f70e90670029fdffe3::$classMap;

        }, null, ClassLoader::class);
    }
}