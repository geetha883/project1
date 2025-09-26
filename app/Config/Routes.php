<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->setDefaultControllers('Users');
$routes->get('/', 'Users::login');
$routes->match(['GET','POST'],'register', 'Users::register');
$routes->match(['GET','POST'], 'login', 'Users::login');
$routes->get('/dashboard', 'Dashboard::index'); 
$routes->post('/login/auth', 'Login::auth');

// $routes->get('/', 'Users::login');           // default page
// $routes->match(['get','post'], 'login', 'Users::login'); // login page
// $routes->match(['get','post'], 'register', 'Users::register'); // registration
