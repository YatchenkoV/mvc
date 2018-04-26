<?php 

// namespace Routing;

Class Router
{
	protected $routes = []; //array with all routes (table of routes)
	protected $route = []; // array with only current route


	// method to fill a table of routes
	public function add($path, $route = [])
	{
		$this->routes[$path] = $route; // fills the array [$path = key]
	}


	//method to show all the elenents in $Routes; mostly for debaging 
	public function getRoutes()
	{
		return $this->routes;
	}


	// method to show elements in current $route;
	public function getRoute()
	{
		return $this->route;
	}


	// finds matches between $uri and exsisting $routes  
	public function getMatchRoute($url)
	{
		// checks matches in Table of routes with $uri; i.e. in method add: $path = $pattern;
		foreach ($this->routes as $pattern => $route) 
			{
			if ($url == $pattern) 
			{
				$this->route = $route;
				return true;
			}
		}
		return false;
	}

	public function dispatch($url)
	{
		if ($this->getMatchRoute($url)) 
		{
			$controller = $this->route['controller'];
			if (class_exists($controller)) 
			{
				$controllerObject = new $controller;
				$action = $this->route['action'];
				if (method_exists($controllerObject, $action))
				{
					$controllerObject->$action();
				}
				else
				{
					echo "Action <b>$controller->$action</b> hasn't found";
				}
			}
			else
			{
				echo "Class <b>$controller</b> hasn't found";
			}
		}
		else
		{
			http_response_code(404);
			echo "404 NOT FOUND";
		}
	}
}