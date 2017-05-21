<?php
include "Core/Routing/Router.php";
include "Core/Dispatcher/Dispatcher.php";

// Функция-автозагрузчик
spl_autoload_register(function ($class) {
    $path = 'App/Controller/' . $class . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});


$dispatcher = new Dispatcher();
$dispatcher->launch_process();
