<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 12/30/15
 * Time: 6:09 PM
 */

require_once __DIR__.'/../vendor/autoload.php';

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/',function(){
    $hello = 'hello';

    return $hello;
});
$app->run();
