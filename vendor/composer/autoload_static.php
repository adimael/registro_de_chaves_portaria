<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5be9c634a5e026679cf75d23973382f
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5be9c634a5e026679cf75d23973382f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5be9c634a5e026679cf75d23973382f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd5be9c634a5e026679cf75d23973382f::$classMap;

        }, null, ClassLoader::class);
    }
}
