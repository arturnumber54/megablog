<?php

namespace App\Controller;

class IndexController extends BaseController
{
    public function helloAction()
    {
        $this->render->view('index/hello.php', ['msg' => 'Hello!', 'titlePage' => 'Index']);
    }
    
    public function viewRegistration()
    {
        $this->render->view('index/registration.php', ['titlePage' => 'Регистрация']);
    }
}
