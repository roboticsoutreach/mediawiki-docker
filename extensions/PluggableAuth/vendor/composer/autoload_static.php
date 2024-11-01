<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8133697a36a6eac2abcaa90ba888d3b3
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8133697a36a6eac2abcaa90ba888d3b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8133697a36a6eac2abcaa90ba888d3b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8133697a36a6eac2abcaa90ba888d3b3::$classMap;

        }, null, ClassLoader::class);
    }
}
