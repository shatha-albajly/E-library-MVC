<?php


namespace app\controllers;

// use app\Products;
use app\Router;
use app\helpers\UtilHelper;
use app\DBFunctions\DBCategories;


class categoriesController
{
    public static ?int $id = null;
    public static string $name;
    public static array $imageFile;
    public static ?string $imagePath = null;
    public static $productData;


    // show categiry
    public static function showCategories()
    {
        $keyword = $_GET['search'] ?? '';
        DBCategories::showCategories($keyword);
        Router::renderView('categories/index', [
            'products' => DBCategories::$products,
            'keyword' => $keyword
        ]);
    }

    // add category
    public static function createCategories()
    {
        $categoryData = [
            'image' => ''
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryData['name'] = $_POST['name'];
            $categoryData['imageFile'] = $_FILES['image'] ?? null;

            self::load($categoryData);
            self::save();
            header('Location: /categories');
            exit;
        }
        Router::renderView('categories/create', [
            'product' => $categoryData
        ]);
    }

    // update boocategory
    public static function updateCategories()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: /categories');
            exit;
        }
        DBCategories::getCategoriesById($id);
        $productData = DBCategories::$selected;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
            $productData['name'] = $_POST['name'];
            $productData['imageFile'] = $_FILES['image'] ?? null;


            self::$productData = $productData;


            self::load($productData);
            self::save();
            header('Location: /categories');
            exit;
        }

        Router::renderView('categories/update', [
            'product' => $productData
        ]);
    }


    // delete category
    public static function deleteCategories()
    {
        $id = $_POST['id'] ?? null;
        if (!$id) {
            header('Location: /categories');
            exit;
        }
        if (DBCategories::deleteCategories($id)) {
            header('Location: /categories');
            exit;
        }
        header('Location: /categories');
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
                DBCategories::updateCategories();
            } else {
                DBCategories::createCategories();
            }
        }
    }
}
