<?php

$router->add('/price/index', ['controller' => 'price', 'action' => 'index']);
$router->add('/price', ['controller' => 'price', 'action' => 'index']);
$router->add('', ['controller' => 'Main', 'action' => 'index']);