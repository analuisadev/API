<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd326f4aed1250c86e7504ae4797a285
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'f3acf15adcdaa55dd6fd95b065b4a226' => __DIR__ . '/../..' . '/Config/configuration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'Pc\\Apisenai\\' => 12,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Pc\\Apisenai\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Model',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd326f4aed1250c86e7504ae4797a285::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd326f4aed1250c86e7504ae4797a285::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd326f4aed1250c86e7504ae4797a285::$classMap;

        }, null, ClassLoader::class);
    }
}
