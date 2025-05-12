<?php

use App\Controllers\MailSender;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ------------------- HTML ----------------------
// Home
$routes->get('/', 'Pages::Home');
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

// Send Message
$routes->post('/contact', 'Pages::save_feedback');

// Converting BLOB to Image
$routes->get('/unit/send/(:segment)', 'Pages::convert/$1');

// Admin
$routes->get('/admin', 'Pages::admin');