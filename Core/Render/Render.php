<?php

namespace Core\Render;

class Render
{
    public function view($layoutName, $vars = [])
    {
        extract($vars);
        require_once 'App/layouts/' . $layoutName . '.php';
    }
}