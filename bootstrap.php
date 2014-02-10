<?php

define('ROOT', __DIR__);

spl_autoload_register(function($className){
    $file = str_replace('\\', '/', $className).'.php';

    if (file_exists(ROOT.'/src/'.$file)) {
        include ROOT.'/src/'.$file;
    }
});

$loader = require_once ROOT . '/vendor/autoload.php';

$app['autoloader'] = $app->share(function () use ($loader) {
    return $loader;
});
$app['autoloader']->add("App", ROOT);

require_once ROOT.'/config/config.php';