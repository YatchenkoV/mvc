 <?php  
require_once '../app/config.php';

$query = rtrim($_SERVER['REQUEST_URI'], '/');

require_once '../app/routing/Router.php';
require_once '../app/libs/functions.php';



$router = new Router($query);
require_once '../app/routes.php';
require_once '../app/core/Controller.php';
require_once '../app/core/view.php';
require_once '../src/Controllers/Main.php';
require_once '../src/Controllers/Price.php';



$router->dispatch($query);

