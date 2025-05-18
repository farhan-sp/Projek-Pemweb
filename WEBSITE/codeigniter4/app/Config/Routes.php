<?php

use App\Controllers\MailSender;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ------------------- HTML ----------------------
// Home
$routes->get('/', to: 'Pages::home');
$routes->get('/home', 'Pages::home');
$routes->get('/index', 'Pages::home');
// About
$routes->get('/about', 'Pages::about');
// Sales
$routes->get('/sales', 'Pages::sales');
// Unit Description
$routes->get("/unit", 'Pages::unit_description');
// Contact
$routes->get('/contact', 'Pages::contact');
// Edit Page
$routes->get('/edit', 'Pages::edit');
// Thanks
$routes->get('/contact/thanks', 'Pages::thanks');

// Send Message
$routes->post('/contact/send', 'Pages::save_feedback');

// Converting BLOB to Image
$routes->get('/unit/send/(:segment)', 'Pages::convertRoom/$1');
$routes->get('/edit/send/(:segment)', 'Pages::convertBerita/$1');

// Admin
$routes->get('/admin', 'Pages::admin');
$routes->get('/login', 'Pages::login');
$routes->post('/tambah-admin', 'Pages::add_admin');
$routes->post('/cek-login', 'Pages::cek_login');
$routes->get('/logout', 'Pages::logout');

// Filter
$routes->group('admin', ['filter' => 'admin'], function($routes) {
    $routes->get('/home', 'AdminController::index');
});

// CRUD
$routes->post('/edit/tambah', 'Pages::simpan');
$routes->post('/edit/delete/(:num)', 'Pages::delete/$1');
$routes->post('/edit/update/(:num)', 'Pages::update/$1');

