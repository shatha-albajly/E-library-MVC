<?php


namespace app\controllers;

// use app\Products;
use app\Router;
use app\helpers\UtilHelper;
use app\DBFunctions\DBPayments;


class paymentsController
{
    public static ?int $id = null;
    public static string $name;
    public static array $imageFile;
    public static ?string $imagePath = null;
    public static $productData;


    // show categiry
    public static function showPayments()
    {
        $keyword = $_GET['search'] ?? '';
        DBPayments::showPayments($keyword);
        Router::renderView('payments/index', [
            'products' => DBPayments::$products,
            'keyword' => $keyword
        ]);
    }

    // add Payments
    public static function createPayments()
    {
        $PaymentsData = [
            'image' => ''
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $PaymentsData['name'] = $_POST['name'];
            $PaymentsData['imageFile'] = $_FILES['image'] ?? null;

            self::load($PaymentsData);
            self::save();
            header('Location: /payments');
            exit;
        }
        Router::renderView('payments/create', [
            'product' => $PaymentsData
        ]);
    }

    // update Payments
    public static function updatePayments()
    {
        echo "dsds";
        $id = $_GET['id'] ?? null;
        echo $id;

        if (!$id) {
            header('Location: /payments');
            exit;
        }
        DBPayments::getPaymentsById($id);
        $productData = DBPayments::$selected;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
            $productData['name'] = $_POST['name'];
            $productData['imageFile'] = $_FILES['image'] ?? null;


            self::$productData = $productData;


            self::load($productData);
            self::save();
            // header('Location: /payments');
            // exit;
        }

        Router::renderView('payments/update', [
            'product' => $productData
        ]);
    }


    // delete Payments
    public static function deletePayments()
    {
        $id = $_POST['id'] ?? null;
        echo $id;
        echo 'dddddddddddddd';
        if (!$id) {
            header('Location: /payments');
            exit;
        }
        if (DBPayments::deletePayments($id)) {
            header('Location: /payments');
            exit;
        }
        header('Location: /payments');
        exit;
    }



    public static function load($data)
    {
        self::$id = $data['id'] ?? null;
        self::$name = $data['name'];
        self::$imageFile = $data['imageFile'];
        self::$imagePath = $data['image'] ?? null;
    }


    public static function save()
    {
        $errors = [];
        if (!is_dir(__DIR__ . '/../public/images')) {
            mkdir(__DIR__ . '/../public/images');
        }

        if (!self::$name) {
            $errors[] = 'Product title is required';
        }


        if (empty($errors)) {
            if (self::$imageFile &&  self::$imageFile['tmp_name']) {
                if (self::$imagePath) {
                    unlink(__DIR__ . '/../public/' .  self::$imagePath);
                }
                self::$imagePath = 'images/' . UtilHelper::randomString(8) . '/' .  self::$imageFile['name'];
                mkdir(dirname(__DIR__ . '/../public/' .  self::$imagePath));
                move_uploaded_file(self::$imageFile['tmp_name'], __DIR__ . '/../public/' .  self::$imagePath);
            }

            if (self::$id) {
                echo "ffff";
                DBPayments::updatePayments();
            } else {
                DBPayments::createPayments();
            }
        }
    }
}