<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 12/30/15
 * Time: 8:22 PM
 */

namespace Jimmy\HMiF\Http\Controller;

use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;

class AppController implements ControllerProviderInterface
{

    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/home', [$this, 'homeAction'])
//            ->before([$this, 'checkUserLogin'])
            ->bind('home');
    }

    public function checkUserLogin()
    {

    }

    public function homeAction()
    {

    }
}