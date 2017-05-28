<?php

namespace App\Controller;

class IndexController
{
    public function __construct()
    {
        
    }
    
    public function helloAction()
    {
        $vars['titlePage'] = 'index';
        $vars['msg'] = 'Hello!';
        
        return $vars;
    }
}
