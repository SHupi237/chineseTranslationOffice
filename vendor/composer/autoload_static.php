<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9dc3b4dbbdff050e0086cfb1e5cf9f97
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9dc3b4dbbdff050e0086cfb1e5cf9f97::$classMap;

        }, null, ClassLoader::class);
    }
}