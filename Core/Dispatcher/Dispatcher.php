<?php

class Dispatcher
{
	private $router;
	
	public function __construct()
	{
		$this->router = new Router();
	}
	
	public function process()
	{
		// Получаем название контроллера и действия
		$params = $this->router->route();
		
        if (!isset($params['controller'])) {
            throw new NotFoundControllerException('Не удалось получить название контроллера.');
        }
        
        if (!isset($params['action'])) {
            throw new NotFoundControllerException('Не удалось получить название действия.');
        }
        
		// Существует ли класс котроллера с данным названием?
		$path = 'App/Controller/' . $params['controller'] . '.php';
		if (!file_exists($path)) {
			throw new NotFoundControllerException("Контроллер {$params['controller']} не найден.");
		}
		// Создаем экземпляр класса контроллера
		$object = new $params['controller'];
		
		// Проверка наличия метода
		if (!method_exists($object, $params['action'])) {
			throw new NotFoundControllerException("Метод {$params['action']} не найден.");
		}
		// Запуск метода действия
		$object->$params['action']();
	}
}
