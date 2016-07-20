<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc181a394f13ab4e2e65c9448ae9a8222
{
    public static $classMap = array (
        'SoundCloudPlugin\\field\\SoundCloudDefinition' => __DIR__ . '/../..' . '/app/field/SoundCloudDefinition.php',
        'SoundCloud\\Template' => __DIR__ . '/../..' . '/app/class/Template.php',
        'SoundCloud\\field\\SoundCloud' => __DIR__ . '/../..' . '/app/field/SoundCloud.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc181a394f13ab4e2e65c9448ae9a8222::$classMap;

        }, null, ClassLoader::class);
    }
}