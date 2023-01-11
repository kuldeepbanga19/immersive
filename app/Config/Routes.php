<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('User');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// $routes->get('/', 'Home::index');
$routes->resource('Testcontroller');

$routes->get('scenariorolecateAPI/(:num)','Scenario_role_cateAPI::scenario_role_cate_get/$1');
$routes->get('scenarioroleAPI/','Scenario_role_cateAPI::scenario_role_get_all');
$routes->get('scenariofeedbackAPI/(:num)','Scenario_role_cateAPI::scenario_feedback/$1');
$routes->get('scenariorankingAPI/(:num)','Scenario_role_cateAPI::scenario_ranking/$1');
$routes->get('scenarioanalysisAPI/(:num)','Scenario_role_cateAPI::scenario_analysis/$1');

$routes->get('rvw/(:num)','Drill_player_setup::review_data/$1');
$routes->get('Scenariorest/', 'Scenariorest::index');
$routes->get('Scenariorest/(:num)', 'Scenariorest::show/$1');
$routes->post('Scenariorest', 'Scenariorest::create');
$routes->put('Scenariorest/(:segment)', 'Scenariorest::update/$1');
$routes->delete('Scenariorest/(:segment)', 'Scenariorest::delete/$1');
$routes->get('/', 'User::index');
$routes->get('/login', 'User::index');
$routes->get('/new_index', 'User::new_index');
$routes->get('/new_index', 'User::signin');
$routes->get('scenario/(:num)', 'Scenario::singleUser/$1');
$routes->post('update', 'Scenario::update');
$routes->post('updateRole', 'Scenario::updateRole');

$routes->get('/regis', 'register::link');
$routes->get('form', 'register::adduser');
$routes->post('form', 'register::adduser');

$routes->get('/forget_password', 'otp::linkforget');
$routes->get('/otp_otp', 'otp::sendotp');
$routes->post('/otp_otp', 'otp::sendotp');
$routes->get('/otp_check/(:num)', 'otp::otpcheck/$1');
$routes->post('/otp_check/(:num)', 'otp::otpcheck/$1');
$routes->get('form1', 'otp::newpassword');
$routes->post('form1', 'otp::newpassword');
$routes->get('/otp_resend/(:num)', 'otp::resendotp/$1');




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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
