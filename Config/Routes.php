<?php

use CodeIgniter\Router\RouteCollection;

/* --------------------------------------------------------------------
* Route Definitions
* --------------------------------------------------------------------
*/
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('/registrasi', 'RegistrasiController::registrasi);
$routes->post('/login', 'LoginController::login');

$routes->group('produk', function ($routes) {
    $routes->post('/', 'ProdukController::create');
    $routes->get('/', 'ProdukController::list');
    $routes->get('(:segment)', 'ProdukController::detail/$1');
    $routes->put('(:segment)', 'ProdukController::ubah/$1');
    $routes->delete('(:segment)', 'ProdukController::hapus/$1');
});