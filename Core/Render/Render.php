<?php

namespace Core\Render;

class Render
{
    private $filesPath;
    
    public function __construct($filesPath)
    {
        $this->filesPath = $filesPath;
    }
    
    public function view($fileName, $vars = [])
    {
        extract($vars);
        
        ob_start();
            include $this->filesPath . $fileName;
        return ob_get_clean();
    }
}
