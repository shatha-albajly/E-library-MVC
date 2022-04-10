<?php

use app\controllers\Controller;
use app\controllers\categoriesController;
use app\controllers\CitiesController;
use app\controllers\paymentsController;
use app\controllers\AuthorsController;
use app\controllers\publishersController;
use app\controllers\offersController;
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

Router::get('/dashboard/addresses', [addressesController::class, 'showAddresses']);
Router::get('/dashboard/addresses/create', [addressesController::class, 'createAddresses']);
Router::post('/dashboard/addresses/create', [addressesController::class, 'createAddresses']);
Router::get('/dashboard/addresses/update', [addressesController::class, 'updateAddresses']);
Router::post('/dashboard/addresses/update', [addressesController::class, 'updateAddresses']);
Router::post('/dashboard/addresses/delete', [addressesController::class, 'deleteAddresses']);

Router::get('/authors', [AuthorsController::class, 'showAuthors']);
Router::get('/authors/create', [AuthorsController::class, 'createAuthors']);
Router::post('/authors/create', [AuthorsController::class, 'createAuthors']);
Router::get('/authors/update', [AuthorsController::class, 'createAuthors']);
Router::post('/authors/update', [AuthorsController::class, 'createAuthors']);
Router::post('/authors/delete', [AuthorsController::class, 'createAuthors']);

Router::get('/categories', [categoriesController::class, 'showCategories']);
Router::get('/categories/create', [categoriesController::class, 'createCategories']);
Router::post('/categories/create', [categoriesController::class, 'createCategories']);
Router::get('/categories/update', [categoriesController::class, 'updateCategories']);
Router::post('/categories/update', [categoriesController::class, 'updateCategories']);
Router::post('/categories/delete', [categoriesController::class, 'deleteCategories']);

Router::get('/cities', [CitiesController::class, 'showCities']);
Router::get('/cities/create', [CitiesController::class, 'createCities']);
Router::post('/cities/create', [CitiesController::class, 'createCities']);
Router::get('/cities/update', [CitiesController::class, 'updateCities']);
Router::post('/cities/update', [CitiesController::class, 'updateCities']);
Router::post('/cities/delete', [CitiesController::class, 'deleteCities']);

Router::get('/dashboard/users', [usersController::class, 'showUsers']);
Router::get('/dashboard/users/create', [usersController::class, 'createUsers']);
Router::post('/dashboard/users/create', [usersController::class, 'createUsers']);
Router::get('/dashboard/users/update', [usersController::class, 'updateUsers']);
Router::post('/dashboard/users/update', [usersController::class, 'updateUsers']);
Router::post('/dashboard/users/delete', [usersController::class, 'deleteUsers']);

Router::get('/payments', [paymentsController::class, 'showPayments']);
Router::get('/payments/create', [paymentsController::class, 'createPayments']);
Router::post('/payments/create', [paymentsController::class, 'createPayments']);
Router::get('/payments/update', [paymentsController::class, 'updatePayments']);
Router::post('/payments/update', [paymentsController::class, 'updatePayments']);
Router::post('/payments/delete', [paymentsController::class, 'deletePayments']);

Router::get('/offers', [offersController::class, 'showOffers']);
Router::get('/offers/create', [offersController::class, 'createOffers']);
Router::post('/offers/create', [offersController::class, 'createOffers']);
Router::get('/offers/update', [offersController::class, 'updateOffers']);
Router::post('/offers/update', [offersController::class, 'updateOffers']);
Router::post('/offers/delete', [offersController::class, 'deleteOffers']);

Router::get('/dashboard/orders', [ordersController::class, 'showOrders']);
Router::get('/dashboard/orders/create', [ordersController::class, 'createOrders']);
Router::post('/dashboard/orders/create', [ordersController::class, 'createOrders']);
Router::get('/dashboard/orders/update', [ordersController::class, 'updateOrders']);
Router::post('/dashboard/orders/update', [ordersController::class, 'updateOrders']);
Router::post('/dashboard/orders/delete', [ordersController::class, 'deleteOrders']);

Router::get('/publishers', [publishersController::class, 'showPublishers']);
Router::get('/publishers/create', [publishersController::class, 'createPublishers']);
Router::post('/publishers/create', [publishersController::class, 'createPublishers']);
Router::get('/publishers/update', [publishersController::class, 'updatePublishers']);
Router::post('/publishers/update', [publishersController::class, 'updatePublishers']);
Router::post('/publishers/delete', [publishersController::class, 'deletePublishers']);

Router::resolve();
