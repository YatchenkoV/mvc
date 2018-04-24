<?php
// namespace Core;

require '../app/core/view.php';
// use Core\View;


abstract class Controller
{


	 public function render($template, $layout = null)
    {
        $view = new View();
        return $view->render($template, $layout);
    }



    // show ERROR 404
    public function error404()
    {
        http_response_code(404);
        echo "<h1>404 Page Not Found</h1>";
        die;
    }
}