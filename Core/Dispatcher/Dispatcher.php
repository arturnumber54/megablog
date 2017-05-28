<?php

namespace Core\Dispatcher;

use \Core\Exception\NotFoundControllerException;

class Dispatcher
{
    public function process($params)
    {
        // Существует ли класс котроллера с данным названием?
        $path = 'App/Controller/' . $params['controller'] . '.php';
        if (!file_exists($path)) {
            throw new NotFoundControllerException("Контроллер {$params['controller']} не найден.");
        }
        
        $className = 'App\Controller\\' . $params['controller'];
        
        // Создаем экземпляр класса контроллера
        $object = new $className();
        
        // Проверка наличия метода
        if (!method_exists($object, $params['action'])) {
            throw new NotFoundControllerException("Метод {$params['action']} не найден.");
        }
        // Запуск метода действия
        return $object->$params['action']();
    }
}
