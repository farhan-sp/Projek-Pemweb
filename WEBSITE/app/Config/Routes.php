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
// Thanks
$routes->get('/thanks', 'Pages::thanks');

// Send Message
$routes->post('/contact/send', 'CRUD::save_feedback');

// Admin
$routes->get('/logout', 'Users::logout');
$routes->get('/login', 'Pages::login');
$routes->post('/cek-login', 'Users::cek_login');

// Filter
$routes->get('/admin', 'Pages::admin');
$routes->post('/tambah-admin', 'Users::add_admin');

// CRUD dengan filter admin
$routes->get('/edit', 'Pages::edit');
$routes->post('/edit/tambah', 'CRUD::simpan');
$routes->post('/edit/delete/(:num)', 'CRUD::delete/$1');
$routes->post('/edit/update/(:num)', 'CRUD::update/$1');
