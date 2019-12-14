<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde350768f7b7cc15e93eabfce6ef7074
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\Extra\\CssInliner\\' => 22,
            'Twig\\' => 5,
            'TijsVerkoyen\\CssToInlineStyles\\' => 31,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\CssSelector\\' => 30,
            'Symfony\\Component\\Asset\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\Extra\\CssInliner\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/cssinliner-extra/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'TijsVerkoyen\\CssToInlineStyles\\' => 
        array (
            0 => __DIR__ . '/..' . '/tijsverkoyen/css-to-inline-styles/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'Symfony\\Component\\Asset\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/asset',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde350768f7b7cc15e93eabfce6ef7074::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde350768f7b7cc15e93eabfce6ef7074::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
