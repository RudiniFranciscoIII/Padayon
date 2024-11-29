<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/','Index::main');
$routes->get('index','Index::login');
//$routes->get('index/index','Index::index');
$routes->get('home','Index::index');

$routes->get('index/showdata','Index::showData');
$routes->get('index/showdata/(:alpha)/(:num)','Index::showData/$1/$2');

$routes->get('index/about', 'Index::about');

$routes->get('users', 'Users::index');
$routes->get('users/add', 'Users::add');
$routes->post('users/add', 'Users::add');
$routes->get('users/view/(:num)', 'Users::view/$1');
$routes->get('users/edit/(:num)', 'Users::edit/$1');
$routes->post('users/edit/(:num)', 'Users::edit/$1');
$routes->get('users/delete/(:num)', 'Users::delete/$1');

$routes->get('products', 'Products::index');
$routes->get('products/add', 'Products::add');
$routes->post('products/add', 'Products::add');
$routes->get('products/view/(:num)', 'Products::view/$1');
$routes->get('products/edit/(:num)', 'Products::edit/$1');
$routes->post('products/edit/(:num)', 'Products::edit/$1');
$routes->get('products/delete/(:num)', 'Products::delete/$1');
$routes->get('products/deactivate/(:num)', 'Products::deactivate/$1');


// For Login
$routes->get('index/login', 'Index::login');
$routes->post('index/login', 'Index::login');


//deactivate
$routes->get('users/deactivate/(:num)', 'Users::deactivate/$1');

//logout
$routes->get('index/logout', 'Index::logout');

//main
$routes->get('main', 'Index::main'); // Home page
$routes->get('itso/login', 'Index::login'); // ITSO Personnel login
$routes->get('student/login', 'Students::add'); // Student page
$routes->get('associate', 'AssociateController::index'); // Associate pag

//student

//