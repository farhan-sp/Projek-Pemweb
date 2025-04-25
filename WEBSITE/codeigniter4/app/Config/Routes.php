<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



// ------------------- HTML ----------------------
// Nav
$routes->get('/nav.css', 'Style::nav');

// Home
$routes->get('/', 'Home::index');
$routes->get('/home', 'Pages::home');
$routes->get('/index', 'Pages::home');
// About
$routes->get('/about', 'Pages::about');
// Sales
$routes->get('/sales', 'Pages::sales');
// Contact
$routes->get('/contact', 'Pages::contact');

// ------------------- CSS ----------------------
// home
// $routes->get('/css/home.css', 'Style::home');
// navigasi
// $routes->get('/css/home.css', 'Style::nav');