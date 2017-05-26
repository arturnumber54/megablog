<?php

require 'vendor/autoload.php';

$core = new Core\Core();

try {
    $core->start();
} catch (Core\Exception\NotFoundControllerException $exc) {
    echo $exc->getMessage();
    die();
}
