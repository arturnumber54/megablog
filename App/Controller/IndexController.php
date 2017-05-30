<?php

namespace App\Controller;

class IndexController extends BaseController
{
    public function helloAction()
    {
        $this->render->view('index/hello.php', ['msg' => 'Hello!', 'titlePage' => 'Index']);
    }
}
