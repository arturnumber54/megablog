<?php

namespace Core;

class Core
{
    private $router;
    private $dispatcher;
    
    public function __construct()
    {
        $this->router = new \Core\Routing\Router();
        $this->dispatcher = new \Core\Dispatcher\Dispatcher();
    }
    
    public function start()
    {
        // Получаем параметры диспетчеризации.
        $params = $this->router->route();
        
        if (!isset($params['controller'])) {
            throw new \Core\Exception\NotFoundControllerException('Не удалось получить название контроллера.');
        }
        
        if (!isset($params['action'])) {
            throw new \Core\Exception\NotFoundControllerException('Не удалось получить название действия.');
        }
        
        // Обработка полученных параметров.
        $this->dispatcher->process($params);
    }
}
