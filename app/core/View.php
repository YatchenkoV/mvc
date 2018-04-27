<?php
// namespace Core;



class View
{
    public $route = [];
    public $view;
    public $layout;

    
	public function __construct($route, $view, $layout)
	{
        $this->route = $route;
        $this->view = $route['action'];
        $this->layout = $layout ?: LAYOUT;
	}




    public function render()
    {   

        $file_view = ROOT_DIR . "/src/views/{$this->route['controller']}/{$this->view}.php";

        ob_start();
        if (is_file($file_view)) 
        {
            require_once  $file_view;
        }
        else
        {
            echo "<p>Не найден <b>$file_view</b>.</p>";
        }
        $content = ob_get_clean();

        $file_layout = ROOT_DIR . "/src/views/{$this->layout}.php";
        if (is_file($file_layout)) 
        {
            require_once $file_layout;

        }
        else
        {
            echo "<p>Не найден <b>$file_layout</b>.</p>";
        }
    }

/*
    public function getTemplatePath($template)
    {
        require_once '../app/libs/functions.php';
        return str_replace('\\', '/', ROOT_DIR).'/src/views'.$template.'/index.php';
    }
    */

}
