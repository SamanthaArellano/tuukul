<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcbd4a7763149624d73d2762228551835
{
    public static $files = array (
        '4940672e65e7c6c88ed7150711580427' => __DIR__ . '/..' . '/codeinwp/gutenberg-animation/load.php',
        '000334a8dfa40b2953cab51d6fa9bebe' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/load.php',
        '121493e618f7dac5b708da14e4109f9a' => __DIR__ . '/..' . '/codeinwp/gutenberg-css/load.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tubalmartin\\CssMin\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tubalmartin\\CssMin\\' => 
        array (
            0 => __DIR__ . '/..' . '/tubalmartin/cssmin/src',
        ),
    );

    public static $classMap = array (
        'tubalmartin\\CssMin\\Colors' => __DIR__ . '/..' . '/tubalmartin/cssmin/src/Colors.php',
        'tubalmartin\\CssMin\\Command' => __DIR__ . '/..' . '/tubalmartin/cssmin/src/Command.php',
        'tubalmartin\\CssMin\\Minifier' => __DIR__ . '/..' . '/tubalmartin/cssmin/src/Minifier.php',
        'tubalmartin\\CssMin\\Utils' => __DIR__ . '/..' . '/tubalmartin/cssmin/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcbd4a7763149624d73d2762228551835::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcbd4a7763149624d73d2762228551835::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcbd4a7763149624d73d2762228551835::$classMap;

        }, null, ClassLoader::class);
    }
}
