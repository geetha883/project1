<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->setDefaultControllers('Users');
$routes->get('/', 'Users::login',['filter' => 'noauth']);
$routes->get('logout', 'Users::logout');
$routes->match(['GET','POST'],'register', 'Users::register',['filter' => 'noauth']);
$routes->match(['GET','POST'], 'login', 'Users::login');
// $routes->get('/dashboard', 'Dashboard::index'); 
$routes->post('/login/auth', 'Login::auth');
$routes->match(['GET','POST'], 'profile', 'Users::profile', ['filter' => 'auth']);
// $routes->get( 'dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/dashboard', 'Users::viewusers', ['filter' => 'auth']);



