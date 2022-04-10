<?php


namespace app\controllers;

use app\Router;
use app\DBFunctions\DBAuthors;


class AuthorsController
{


    public static ?int $id = null;
    public static string $name;
    public static $productData;


    // show Authors
    public static function showAuthors()
    {

        $keyword = $_GET['search'] ?? '';
        DBAuthors::showAuthors($keyword);
        Router::renderView('authors/index', [
            'products' => DBAuthors::$products,
            'keyword' => $keyword
        ]);
    }

    // add Authors
    public static function createAuthors()
    {
        $authorsData = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $authorsData['name'] = $_POST['name'];

            self::load($authorsData);
            self::save();
            header('Location: /authors');
            exit;
        }
        Router::renderView('authors/create', [
            'product' => $authorsData
        ]);
    }

    // update Authors
    public static function updateAuthors()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: /authors');
            exit;
        }
        DBAuthors::getAuthorsById($id);
        $productData = DBAuthors::$selected;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
            $productData['name'] = $_POST['name'];


            self::$productData = $productData;


            self::load($productData);
            self::save();
            header('Location: /authors');
            exit;
        }

        Router::renderView('authors/update', [
            'product' => $productData
        ]);
    }


    // delete Authors
    public static function deleteAuthors()
    {
        $id = $_POST['id'] ?? null;
        if (!$id) {
            header('Location: /authors');
            exit;
        }
        if (DBAuthors::deleteAuthors($id)) {
            header('Location: /authors');
            exit;
        }
        header('Location: /authors');
        exit;
    }



    public static function load($data)
    {
        self::$id = $data['id'] ?? null;
        self::$name = $data['name'];
    }


    public static function save()
    {
        $errors = [];


        if (!self::$name) {
            $errors[] = 'Product title is required';
        }


        if (empty($errors)) {


            if (self::$id) {
                DBAuthors::updateAuthors();
            } else {
                DBAuthors::createAuthors();
            }
        }
    }
}
