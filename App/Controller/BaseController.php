<?php

namespace App\Controller;

use \Core\Interfaces\RenderInterface;

class BaseController
{
    protected $render;
    
    public function __construct(RenderInterface $render)
    {
        $this->render = $render;
    }
}
