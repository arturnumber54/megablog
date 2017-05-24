<?php

namespace Core\Dispatcher;

class Dispatcher
{
    public function __construct()
    {
        
    }
    
    public function process($params)
    {
        // Существует ли класс котроллера с данным названием?
        $path = 'App/Controller/' . $params['controller'] . '.php';
        if (!file_exists($path)) {
            throw new \Core\Exception\NotFoundControllerException("Контроллер {$params['controller']} не найден.");
        }
        
        $className = 'App\Controller\\' . $params['controller'];
        
        // Создаем экземпляр класса контроллера
        $object = new $className();
        
        // Проверка наличия метода
        if (!method_exists($object, $params['action'])) {
            throw new \Core\Exception\NotFoundControllerException("Метод {$params['action']} не найден.");
        }
        // Запуск метода действия
        $object->$params['action']();
    }
}
