<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit164d49b7093265cc53a3886fc55e3822
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
            'Components\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Admin\\About' => __DIR__ . '/../..' . '/app/Controllers/Admin/About.php',
        'App\\Controllers\\Admin\\Index' => __DIR__ . '/../..' . '/app/Controllers/Admin/Index.php',
        'App\\Controllers\\Admin\\Main' => __DIR__ . '/../..' . '/app/Controllers/Admin/Main.php',
        'App\\Controllers\\Home\\Galerry' => __DIR__ . '/../..' . '/app/Controllers/Home/Galerry.php',
        'App\\Controllers\\Home\\Page404' => __DIR__ . '/../..' . '/app/Controllers/Home/Page404.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Core\\View' => __DIR__ . '/../..' . '/core/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit164d49b7093265cc53a3886fc55e3822::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit164d49b7093265cc53a3886fc55e3822::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit164d49b7093265cc53a3886fc55e3822::$classMap;

        }, null, ClassLoader::class);
    }
}
