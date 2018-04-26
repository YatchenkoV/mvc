<?php

$router->add('/price/index', ['controller' => 'Price', 'action' => 'index']);
$router->add('/price', ['controller' => 'Price', 'action' => 'index']);
$router->add('', ['controller' => 'Main', 'action' => 'index']);
$router->add('/price/map', ['controller' => 'Price', 'action' => 'map']);