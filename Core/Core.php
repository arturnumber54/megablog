<?php

namespace Core;

use \Core\Routing\Router;
use \Core\Dispatcher\Dispatcher;
use \Core\Exception\NotFoundControllerException;

class Core
{
    private $router;
    private $dispatcher;
    
    public function __construct()
    {
        $this->router = new Router();
        $this->dispatcher = new Dispatcher();
    }
    
    public function start()
    {
        // Получаем параметры диспетчеризации.
        $params = $this->router->route();
        
        if (!isset($params['controller'])) {
            throw new NotFoundControllerException('Не удалось получить название контроллера.');
        }
        
        if (!isset($params['action'])) {
            throw new NotFoundControllerException('Не удалось получить название действия.');
        }
        
        // Обработка полученных параметров.
        $this->dispatcher->process($params);
    }
}
