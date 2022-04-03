<?php

use app\controllers\Controller;
use app\Router;

require_once __DIR__ . '/../vendor/autoload.php';


Router::get('/', [Controller::class, 'index']);
Router::get('/index', [Controller::class, 'index']);
Router::get('/category', [Controller::class, 'category']);
Router::get('/book', [Controller::class, 'book']);
Router::get('/cart', [Controller::class, 'cart']);
Router::get('/checkout', [Controller::class, 'checkout']);
Router::post('/signup', [Controller::class, 'signup']);
Router::post('/login', [Controller::class, 'login']);
Router::get('/dashboard', [Controller::class, 'bookIndex']);
Router::get('/dashboard/index', [Controller::class, 'bookIndex']);
Router::get('/dashboard/create', [Controller::class, 'bookCreate']);
Router::post('/dashboard/create', [Controller::class, 'bookCreate']);
Router::get('/dashboard/update', [Controller::class, 'bookUpdate']);
Router::post('/dashboard/update', [Controller::class, 'bookUpdate']);
Router::post('/dashboard/delete', [Controller::class, 'bookDelete']);
Router::resolve();