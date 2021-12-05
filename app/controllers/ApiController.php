<?php

namespace app\controllers;

use app\core\Controller;
use app\lib\MinecraftServerStatus;

/**
 * Class ApiController
 * @package app\controllers
 */
class ApiController extends Controller
{
    /**
     * @param mixed $route
     *
     * @return void
     */
    public function __construct($route)
    {
        $this->acl = [
            'all' => [],
            'authorize' => [],
            'guest' => [],
            'admin' => ['status'],
        ];
        parent::__construct($route);
    }

    /**
     *
     */
    public function linkAction()
    {
        if (!$this->model->checkTokenExists($this->route['token'])) {
            $this->view->model('account/login');
        }
    }

    public function statusAction()
    {
        $status = new MinecraftServerStatus();
        $servers = $this->model->db->query('SELECT * FROM too_servers ORDER BY port')->fetch_all(MYSQLI_ASSOC);

        $response = [];
        foreach ($servers as $server) {
            $stat = $status->getStatus($server['host'], $server['port']);
            if ($stat)
                $response[$server['id']] = [true, intval($stat['players']), intval($stat['maxplayers']), $stat['ping'], 20];
            else
                $response[$server['id']] = [false];

            usleep(2000);
        }

        $this->view->json($response);
//{
//  "4": [false],
//  "1":[true,4,20],
//  "2":[false],
//  "3":[false]`
//}
    }
}

