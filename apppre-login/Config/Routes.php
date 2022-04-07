<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/', 'RegisterController::index');
$routes->get('/register', 'RegisterController::index');
$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'Logout::index');
$routes->get('/dashboard', 'DashboardController::index',['filter' => 'routeFilter']);
//$routes->get('(:any)', 'Pages::view/$1');
$routes->get('products/(:segment)', 'Products::view/$1');
$routes->get('products', 'Products::index');
//$routes->get('(:any)', 'Products::view/$1');
$routes->get('brands/(:segment)', 'Brands::view/$1');
$routes->get('brands', 'Brands::index');
//$routes->get('(:any)', 'Brands::view/$1');
$routes->get('type/(:segment)', 'Type::view/$1');
$routes->get('type', 'Type::index');
//$routes->get('(:any)', 'Brands::view/$1');
$routes->get('gender/(:segment)', 'Gender::view/$1');
$routes->get('gender', 'Gender::index');
//$routes->get('(:any)', 'Gender::view/$1');
$routes->match(['get', 'post'], 'feedback/create', 'Feedback::create');
$routes->get('feedback/(:segment)', 'Feedback::view/$1');
$routes->get('feedback', 'Feedback::index');
//$routes->get('(:any)', 'Feedback::view/$1');
$routes->get('search/(:segment)', 'Search::view/$1');
$routes->get('search', 'Search::index');
//$routes->get('(:any)', 'Search::view/$1');
$routes->get('apis/(:segment)', 'Apis::view/$1');
$routes->get('apis', 'Apis::index');
$routes->get('checkout/(:segment)', 'Checkout::success/$1');
$routes->get('checkout', 'Checkout::index');








/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
