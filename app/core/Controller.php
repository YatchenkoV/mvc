<?php
// namespace Core;

require_once '../app/core/view.php';
require_once '../app/config.php';
// use Core\View;


abstract class Controller
{


	 public $route = [];
     public $view;
     public $layout;

     public function __construct($route)
     {
        $this->route = $route;
        $this->view = $route['action'];
        include_once ROOT_DIR . "/src/views/{$route['controller']}/{$this->view}.php";
     }

     public function getView()
     {
        $viewObject = new View($this->route, $this->view, $this->layout);
        $viewObject->render();
     }



    // show ERROR 404
    public function error404()
    {
        http_response_code(404);
        echo "<h1>404 Page Not Found</h1>";
        die;
    }
}