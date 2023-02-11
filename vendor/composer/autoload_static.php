<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d2ea3897551004a1141dee55357dfe8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Caioh\\PaginaPessoal\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Caioh\\PaginaPessoal\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d2ea3897551004a1141dee55357dfe8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d2ea3897551004a1141dee55357dfe8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d2ea3897551004a1141dee55357dfe8::$classMap;

        }, null, ClassLoader::class);
    }
}