<?php

$router->add('/price/index', ['controller' => 'Price', 'action' => 'index']);
$router->add('/price', ['controller' => 'Price', 'action' => 'index']);
$router->add('', ['controller' => 'Main', 'action' => 'index']);
$router->add('/map/index', ['controller' => 'Map', 'action' => 'index']);
$router->add('/map', ['controller' => 'Map', 'action' => 'index']);