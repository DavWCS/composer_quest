<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9c8db786ddb571c6475588f1e7aab05
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dav\\ComposerQuest\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dav\\ComposerQuest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9c8db786ddb571c6475588f1e7aab05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9c8db786ddb571c6475588f1e7aab05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9c8db786ddb571c6475588f1e7aab05::$classMap;

        }, null, ClassLoader::class);
    }
}
