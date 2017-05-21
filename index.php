<?php
/* include "Core/Routing/Router.php";

$router = new Router();
var_dump($router->route()); */

// Функция-автозагрузчик
spl_autoload_register(function ($class) {
    $path = 'App/Controller/' . $class . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

$i = new IndexController();
var_dump($i->helloAction());