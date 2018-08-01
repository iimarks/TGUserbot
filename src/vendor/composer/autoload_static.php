<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9dc4ed2a4568c1e4f2da0c587c8d32f1
{
    public static $files = array (
        'a4ecaeafb8cfb009ad0e052c90355e98' => __DIR__ . '/..' . '/beberlei/assert/lib/Assert/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpSchool\\CliMenu\\' => 18,
        ),
        'A' => 
        array (
            'Assert\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpSchool\\CliMenu\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-school/cli-menu/src',
        ),
        'Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/beberlei/assert/lib/Assert',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Colors' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/colors.php/src',
            ),
            'CliArgs\\' => 
            array (
                0 => __DIR__ . '/..' . '/cheprasov/php-cli-args/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9dc4ed2a4568c1e4f2da0c587c8d32f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9dc4ed2a4568c1e4f2da0c587c8d32f1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9dc4ed2a4568c1e4f2da0c587c8d32f1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}