<?php 

// namespace Routing;

Class Router
{
	protected $routes = []; //array with all routes (table of routes)
	protected $route = []; // array with only current route

	// public function __construct(){
	// 	$this->routes = $routes;
	// 	$this->route = $route;
	// }

	// method to fill a table of routes
	public function add($regexp, $route = [])
	{
		$this->routes[$regexp] = $this->route; // fills the array [$regexp = key]
	}

	//nethod to show all the elenents in $Routes; mostly for debaging 
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
		// checks matches in Table of routes with $uri; i.e. in method add: $regepx = $pattern;
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
}