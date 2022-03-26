<?php

use app\controllers\ProductController;
use app\Router;

require_once __DIR__ . '/../vendor/autoload.php';


Router::get('/', [ProductController::class, 'index']);
Router::get('/index', [ProductController::class, 'index']);
Router::get('/category', [ProductController::class, 'category']);
Router::get('/book', [ProductController::class, 'book']);
Router::get('/cart', [ProductController::class, 'cart']);
Router::get('/checkout', [ProductController::class, 'checkout']);
Router::post('/signup', [ProductController::class, 'signup']);
Router::post('/login', [ProductController::class, 'login']);

Router::resolve();