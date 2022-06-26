<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Model;

/**
 * Class MainController
 * @package app\controllers
 */
class MainController extends Controller
{
    /**
     * @param mixed $route
     *
     * @return void
     */
    public function __construct($route)
    {
        $this->acl = [
            'all' => ['index', 'music', 'video', 'about', 'release'],
            'authorize' => [],
            'guest' => [],
            'admin' => [],
        ];
        parent::__construct($route);
    }

    /**
     *
     */
    public function indexAction()
    {
        $this->view->layout = 'main';
        $this->view->render('Электронный композитор и автор песен');
    }

    /**
     *
     */
    public function musicAction()
    {
        $this->view->render('Music');
    }

    public function videoAction()
    {
        $this->view->render('Videos');
    }

    public function aboutAction()
    {
        $this->view->render('About');
    }

    public function releaseAction()
    {
        $this->view->render('Last realise');
    }
}

