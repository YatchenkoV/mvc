 <?php  
require '../config.php';

$query = rtrim($_SERVER['REQUEST_URI'], '/');

require '../app/routing/Router.php';
require '../app/libs/functions.php';



$router = new Router($query);
require '../app/routes.php';
require '../app/core/Controller.php';
require_once '../app/core/view.php';

$view = new View();


debag($view->getTemplatePath($query));

if ($router->getMatchRoute($query)) 
{
	Controller::render($query);	
}
else
{
	Controller::error404();
}





// debag(Router::getRoutes());

// echo '<br>';

// if (Router::getMatchRoute($query)) 
// {
// 	debag(Router::getRoute());		
// }
// else
// {
// 	echo '404';
// }
