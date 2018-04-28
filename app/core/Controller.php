<?php


require_once '../app/core/view.php';
require_once '../app/config.php';



abstract class Controller
{


	 public $route = [];
     public $view;
    

     public function __construct($route)
     {
        $this->route = $route;
        $this->view = $route['action'];
     }

     public function getView()
     {
        $viewObject = new View($this->route, $this->view);
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