<?php

namespace Core\Routing;

use \Core\Interfaces\RouterInterface;

const DEFAULT_CONTROLLER = "index";
const DEFAULT_ACTION = "index";

class Router implements RouterInterface
{
    // Конструктор.
    public function __construct()
    {
        
    }

    public function route()
    {
        if (isset($_GET['route'])) {
            $temp = explode('/', $_GET['route']);
            $params['controller'] = $temp[0];
            $params['action'] = (isset($temp[1]) ? $temp[1] : '');
        } else {
            $params['controller'] = DEFAULT_CONTROLLER;
            $params['action'] = DEFAULT_ACTION;
        }
        
        return $params;
    }
}
