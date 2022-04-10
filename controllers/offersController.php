<?php


namespace app\controllers;

// use app\Products;
use app\Router;
use app\helpers\UtilHelper;
use app\DBFunctions\DBOffers;


class offersController
{
    public static ?int $id = null;
    public static string $title;
    public static string $discount;
    public static string $start_date;
    public static string $end_date;
    public static string $all_books;



    public static $productData;


    // show Offers
    public static function showOffers()
    {
        $keyword = $_GET['search'] ?? '';
        DBOffers::showOffers($keyword);
        Router::renderView('offers/index', [
            'products' => DBOffers::$products,
            'keyword' => $keyword
        ]);
    }

    // add offers
    public static function createOffers()
    {
        $categoryData = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryData['title'] = $_POST['title'];
            $categoryData['discount'] = $_POST['discount'];
            $categoryData['start_date'] = $_POST['start_date'];

            $categoryData['end_date'] = $_POST['end_date'];
            $categoryData['all_books'] = $_POST['all_books'];


            self::load($categoryData);
            self::save();
            header('Location: /offers');
            exit;
        }
        Router::renderView('offers/create', [
            'product' => $categoryData
        ]);
    }

    // update Offers
    public static function updateOffers()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: /offers');
            exit;
        }
        DBOffers::getOffersById($id);
        $productData = DBOffers::$selected;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
            $productData['title'] = $_POST['title'];
            $productData['discount'] = $_POST['discount'];
            $productData['start_date'] = $_POST['start_date'];

            $productData['end_date'] = $_POST['end_date'];
            $productData['all_books'] = $_POST['all_books'];


            self::$productData = $productData;


            self::load($productData);
            self::save();
            header('Location: /offers');
            exit;
        }

        Router::renderView('
        offers/update', [
            'product' => $productData
        ]);
    }


    // delete offers
    public static function deleteOffers()
    {
        $id = $_POST['id'] ?? null;
        if (!$id) {
            header('Location: /offers');
            exit;
        }
        if (DBOffers::deleteOffers($id)) {
            header('Location: /offers');
            exit;
        }
        header('Location: /offers');
        exit;
    }



    public static function load($data)
    {
        self::$id = $data['id'] ?? null;
        self::$title = $data['title'];
        self::$discount = $data['discount'];
        self::$start_date = $data['start_date'];
        self::$end_date = $data['end_date'];
        self::$all_books = $data['all_books'];
    }


    public static function save()
    {
        $errors = [];


        if (!self::$title) {
            $errors[] = 'Product title is required';
        }


        if (empty($errors)) {

            if (self::$id) {

                DBOffers::updateOffers();
            } else {
                DBOffers::createOffers();
            }
        }
    }
}