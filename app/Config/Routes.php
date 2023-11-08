<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();
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
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
//$routes->get('registro', 'Home::registro');
//$routes->get('login', 'Home::login');

/* rutas del registro de usuarios*/
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/* rutas del login*/
$routes->get('/login', 'login_controller::index');
$routes->post('/enviarlogin', 'login_controller::auth');
//es un filtro que hay que crear para que acceda el usuario autorizado
//en Config, filter.php agregar esa funcion autorizada
//tambien hay que crear una vista Auth.php dentro de app, filter
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');
$routes->get('listar_usuarios_admi', 'usuario_controller::f_listar_usuarios_admi');

/* rutas del producto */
$routes->get('listar_productos', 'ProductoController::f_listar_productos');
$routes->post('mostrar_por_categoria', 'ProductoController::categoria_productos');
$routes->get('listar_productos_admi', 'ProductoController::f_listar_productos_admi');

//rutas del carrito
$routes->get('ver_carrito', 'CarritoController::index');
$routes->post('carrito', 'CarritoController::agregar_carrito');
$routes->get('aumentar/(:any)', 'CarritoController::aumentar/$1');
$routes->get('disminuir/(:any)', 'CarritoController::disminuir/$1');
$routes->get('borrar/(:any)', 'CarritoController::borrar/$1');

$routes->get('carritoConstruccion', 'CarritoController::carritoConstruccion');

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