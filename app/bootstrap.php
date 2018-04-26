 <?php  
require '../app/config.php';

$query = rtrim($_SERVER['REQUEST_URI'], '/');

require '../app/routing/Router.php';
require '../app/libs/functions.php';



$router = new Router($query);
require '../app/routes.php';
require '../app/core/Controller.php';
require_once '../app/core/view.php';
require '../src/Controllers/Main.php';
require '../src/Controllers/Price.php';

$view = new View();
debag($router->getRoutes());
echo "<br>";
$router->dispatch($query);

