<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76250a268861cfdd06a9366e34db8d3e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\' => 8,
        ),
        'A' => 
        array (
            'ARA\\LaravelSim\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Modules',
        ),
        'ARA\\LaravelSim\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76250a268861cfdd06a9366e34db8d3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76250a268861cfdd06a9366e34db8d3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}