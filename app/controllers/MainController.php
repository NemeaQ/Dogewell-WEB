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
        $this->view->render('Электронный композитор и автор песен | ');
    }

    /**
     *
     */
    public function musicAction()
    {
        $this->view->render('Моя музыка | ');
    }

    public function videoAction()
    {
        $this->view->render('Мои видео | ');
    }

    public function aboutAction()
    {
        $this->view->render('Обо мне | ');
    }

    public function releaseAction()
    {
        $this->view->render('Послдений релиз | ');
    }
}

