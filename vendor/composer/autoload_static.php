<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit849f6916320b9439e8dd98e306d5c98c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pdc10\\Generatepdf\\' => 18,
        ),
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pdc10\\Generatepdf\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit849f6916320b9439e8dd98e306d5c98c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit849f6916320b9439e8dd98e306d5c98c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit849f6916320b9439e8dd98e306d5c98c::$classMap;

        }, null, ClassLoader::class);
    }
}
