<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94155b407815f6037b15a1dad2f5a9f7
{
    public static $classMap = array (
        'KokoAnalytics\\Admin' => __DIR__ . '/../..' . '/src/class-admin.php',
        'KokoAnalytics\\Aggregator' => __DIR__ . '/../..' . '/src/class-aggregator.php',
        'KokoAnalytics\\Migrations' => __DIR__ . '/../..' . '/src/class-migrations.php',
        'KokoAnalytics\\Plugin' => __DIR__ . '/../..' . '/src/class-plugin.php',
        'KokoAnalytics\\Pruner' => __DIR__ . '/../..' . '/src/class-pruner.php',
        'KokoAnalytics\\Rest' => __DIR__ . '/../..' . '/src/class-rest.php',
        'KokoAnalytics\\Script_Loader' => __DIR__ . '/../..' . '/src/class-script-loader.php',
        'KokoAnalytics\\Shortcode_Most_Viewed_Posts' => __DIR__ . '/../..' . '/src/class-shortcode-most-viewed-posts.php',
        'KokoAnalytics\\Widget_Most_Viewed_Posts' => __DIR__ . '/../..' . '/src/class-widget-most-viewed-posts.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit94155b407815f6037b15a1dad2f5a9f7::$classMap;

        }, null, ClassLoader::class);
    }
}
