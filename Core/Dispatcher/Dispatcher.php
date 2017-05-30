<?php

namespace Core\Dispatcher;

use \Core\Exception\NotFoundControllerException;
use \Core\Render\Render;
use \Core\Interfaces\DispatcherInterface;

class Dispatcher implements DispatcherInterface
{
    public function process($params)
    {
        // Существует ли класс котроллера с данным названием?
        $path = 'App/Controller/' . $params['controller'] . '.php';
        if (!file_exists($path)) {
            throw new NotFoundControllerException("Контроллер {$params['controller']} не найден.");
        }
        
        $className = 'App\Controller\\' . $params['controller'];
        
        $render = new Render('App/View/', 'layouts/default.php');
        
        // Создаем экземпляр класса контроллера
        $object = new $className($render);
        
        // Проверка наличия метода
        if (!method_exists($object, $params['action'])) {
            throw new NotFoundControllerException("Метод {$params['action']} не найден.");
        }
        
        // Запуск метода действия
        $object->$params['action']();
    }
}
