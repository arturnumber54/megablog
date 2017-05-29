<?php

namespace App\Controller;

use Core\Render\Render;

class IndexController
{
    private $render;
    
    public function __construct()
    {
        $this->render = new Render('App/View/');
    }
    
    public function helloAction()
    {
        $content = $this->render->view('index/hello.php', ['msg' => 'Hello!']);
        
        echo $this->render->view('layouts/default.php', ['titlePage' => 'Index', 'content' => $content]);
    }
}
