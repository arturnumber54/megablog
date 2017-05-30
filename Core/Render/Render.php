<?php

namespace Core\Render;

use \Core\Interfaces\RenderInterface;

class Render implements RenderInterface
{
    private $filesPath;
    private $layoutsPath;
    
    public function __construct($filesPath, $layoutName)
    {
        $this->filesPath = $filesPath;
        $this->layoutName = $layoutName;
    }
    
    public function view($fileName, $vars = [])
    {
        extract($vars);
        
        ob_start();
        include $this->filesPath . $fileName;
        $content = ob_get_clean();
        
        ob_start();
        include $this->filesPath . $this->layoutName;
        echo ob_get_clean();
    }
}
