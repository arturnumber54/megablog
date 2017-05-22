<?php
include "Core/Routing/Router.php";
include "Core/Dispatcher/Dispatcher.php";
include "Core/Exception/NotFoundControllerException.php";

// Функция-автозагрузчик
spl_autoload_register(function ($class) {
    $path = 'App/Controller/' . $class . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});


$dispatcher = new Dispatcher();

try {
    $dispatcher->process();
} catch (NotFoundControllerException $exc) {
    echo $exc->getMessage();
    die();
}
