<?php

class Dispatcher
{
	private $router;
	
	public function __construct()
	{
		$this->router = new Router();
	}
	
	public function launch_process()
	{
		// Получаем название контроллера и действия
		$params = $this->router->route();
		
		// Существует ли класс котроллера с данным названием?
		$path = 'App/Controller/' . $params['controller'] . '.php';
		if (!file_exists($path)) {
			return;
		}
		// Создаем экземпляр класса контроллера
		$object = new $params['controller'];
		
		// Проверка наличия метода
		$methods = get_class_methods($object);
		if (!in_array($params['action'], $methods)) {
			return;
		}
		// Запуск метода действия
		$object->$params['action']();
	}
}