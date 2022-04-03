<?php

namespace app;

use app\helpers\UtilHelper;

class Products
{
    public static ?int $id = null;
    public static string $title;
    public static string $description;
    public static string $quantity;
    public static string $category;
    public static float $price;
    public static array $imageFile;
    public static ?string $imagePath = null;

    public static function a()
    {
        echo "he";
    }
    public static function load($data)
    {
        self::$id = $data['id'] ?? null;
        self::$title = $data['title'];
        self::$description = $data['description'];
        self::$category = $data['category-id'];
        self::$quantity = $data['quantity'];

        self::$price = $data['price'];
        self::$imageFile = $data['imageFile'];
        self::$imagePath = $data['image'] ?? null;
    }

    public static function save()
    {
        $errors = [];
        if (!is_dir(__DIR__ . '/../public/images')) {
            mkdir(__DIR__ . '/../public/images');
        }

        if (!self::$title) {
            $errors[] = 'Product title is required';
        }

        if (!self::$price) {
            $errors[] = 'Product price is required';
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

            // $db = Database::$db;
            // if (self::$id) {
            //     $db->updateProduct();
            // } else {
            //     $db->createProduct();
            // }
        }
    }
}