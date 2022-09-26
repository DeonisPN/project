<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd4502ab8f8b737f24a38417fec82f26
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'D' => 
        array (
            'Denis\\Pro\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
        'Denis\\Pro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scr',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd4502ab8f8b737f24a38417fec82f26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd4502ab8f8b737f24a38417fec82f26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd4502ab8f8b737f24a38417fec82f26::$classMap;

        }, null, ClassLoader::class);
    }
}