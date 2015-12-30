<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 12/30/15
 * Time: 6:09 PM
 */

$loader = require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../app/config.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader,'loadClass'));

/**
 * new Silex\Application()
 */

$app = new Silex\Application(
    $config['common']
);

/**
 * Register Doctrine
 */

$app->register(new \Silex\Provider\DoctrineServiceProvider(), $config['db']);

/**
 * Register Twig for Template
 */

$app->register(new \Silex\Provider\TwigServiceProvider(), $config['twig']);

/**
 * Enable Logging
 */
//$app->register(new \Silex\Provider\MonologServiceProvider());

/**
 * Form Handle Service Provider
 */
$app->register(new \Silex\Provider\FormServiceProvider());

/**
 * URL Generator
 */
$app->register(new \Silex\Provider\UrlGeneratorServiceProvider());

/**
 * Silex Service Controller
 */
$app->register(new \Silex\Provider\ServiceControllerServiceProvider());

/**
 * Silex Http Fragment
 */
$app->register(new Silex\Provider\HttpFragmentServiceProvider());

$app->get('/', function () use ($app) {
    return $app->redirect($app["url_generator"]->generate("home"));
});

$app->mount('/', new \Jimmy\HMiF\AppController($app));

$app->run();
