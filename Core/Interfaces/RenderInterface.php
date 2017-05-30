<?php

namespace Core\Interfaces;

interface RenderInterface
{
    public function view($fileName, $vars = []);
}
