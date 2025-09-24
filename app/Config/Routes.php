<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->setDefaultControllers('Users');
$routes->get('/', 'Users::index');
$routes->match(['GET','POST'],'register', 'Users::register');