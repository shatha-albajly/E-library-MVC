<?php


namespace app\controllers;

// use app\Products;
use app\Router;
use app\helpers\UtilHelper;
use app\DBFunctions\DBPublishers;


class publishersController
{
    public static ?int $id = null;
    public static string $name;
    public static string $phone;
    public static string $alt_phone;

    public static string $fax;

    public static string $email;
    public static string $address;
    public static string $country;



    public static array $imageFile;
    public static ?string $imagePath = null;
    public static $productData;


    // show Publishers
    public static function showPublishers()
    {
        $keyword = $_GET['search'] ?? '';
        DBPublishers::showPublishers($keyword);
        Router::renderView('publishers/index', [
            'products' => DBPublishers::$products,
            'keyword' => $keyword
        ]);
    }

    // add Publishers
    public static function createPublishers()
    {
        $categoryData = [
            'image' => ''
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryData['name'] = $_POST['name'];
            $categoryData['phone'] = $_POST['phone'];
            $categoryData['alt_phone'] = $_POST['alt_phone'];
            $categoryData['fax'] = $_POST['fax'];
            $categoryData['email'] = $_POST['email'];
            $categoryData['address'] = $_POST['address'];
            $categoryData['country'] = $_POST['country'];
            $categoryData['imageFile'] = $_FILES['image'] ?? null;

            self::load($categoryData);
            self::save();
            header('Location: /publishers');
            exit;
        }
        Router::renderView('publishers/create', [
            'product' => $categoryData
        ]);
    }

    // update Publishers
    public static function updatePublishers()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: /publishers');
            exit;
        }
        DBPublishers::getPublishersById($id);
        $productData = DBPublishers::$selected;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
            $productData['name'] = $_POST['name'];
            $productData['phone'] = $_POST['phone'];
            $productData['alt_phone'] = $_POST['alt_phone'];
            $productData['fax'] = $_POST['fax'];
            $productData['email'] = $_POST['email'];
            $productData['address'] = $_POST['address'];
            $productData['country'] = $_POST['country'];
            $productData['imageFile'] = $_FILES['image'] ?? null;


            self::$productData = $productData;


            self::load($productData);
            self::save();
            header('Location: /publishers');
            exit;
        }

        Router::renderView('publishers/update', [
            'product' => $productData
        ]);
    }


    // delete publishers
    public static function deletePublishers()
    {
        $id = $_POST['id'] ?? null;
        if (!$id) {
            header('Location: /publishers');
            exit;
        }
        if (DBPublishers::deletePublishers($id)) {
            header('Location: /publishers');
            exit;
        }
        header('Location: /publishers');
        exit;
    }



    public static function load($data)
    {
        self::$id = $data['id'] ?? null;
        self::$name = $data['name'];
        self::$phone = $data['phone'];
        self::$alt_phone = $data['alt_phone'];
        self::$address = $data['address'];
        self::$fax = $data['fax'];
        self::$email = $data['email'];
        self::$country = $data['country'];


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
                DBPublishers::updatePublishers();
            } else {
                DBPublishers::createPublishers();
            }
        }
    }
}