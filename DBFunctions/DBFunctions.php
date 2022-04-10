<?php

namespace app\DBFunctions;

use app\controllers\categoriesController;
use app\controllers\Controller;
use app\DB;

class DBFunctions
{
    public static $db;
    public static $books = [];
    public static $category_id;
    public static $bookInfo;
    public static $products;
    public static $selected;


    // index
    public static  function getBooks()
    {
        //     self::$db->table('books')->column()->orwhere('title')->like('غ')->select();
        echo "getboooks";
        self::$db = DB::sendOutside();
        self::$db->table('categories')->column()->select();
        foreach (self::$db->result as $c) {
            $category = $c['id'];
            self::$category_id[$c['id']] = $c['name'];

            self::$db->table('books')->column()->orwhere('category_id="' . $category . '"')->select();
            echo "</br>" .  "</br>";
            foreach (self::$db->result as $cc) {
                self::$books[$c['id']] = $cc;
            }
            echo "<pre>";
            var_dump(self::$books);
            echo "</pre>";
        }
    }

    // book
    public static  function getBook($book_id)
    {
        echo "getBook";
        self::$db = DB::sendOutside();
        self::$db->table('books')->column()->orwhere('id="' . $book_id . '"')->select();
        foreach (self::$db->result as $cc) {
            self::$bookInfo = $cc;
        }
    }

    public static function getProducts($keyword = '')
    {
        self::$db = DB::sendOutside();
        if ($keyword) {
            self::$db->table('books')->column()->orwhere('title')->like($keyword)->select();
        } else {
            self::$db->table('books')->column()->select();
        }
        foreach (self::$db->result as $cc) {
            self::$products[] = $cc;
        }
    }


    public static function updateProduct()
    {
        self::$db = DB::sendOutside();
        // UPDATE `books` SET `description` = 'e' WHERE `books`.`id` = 13;
        $x = '';
        // echo "<pre>";
        // var_dump(Controller::$productData);
        // echo "</pre>";
        foreach (Controller::$productData as $key => $value) {
            if ($key == 'imageFile') {

                continue;
            } else
                $x = $x . "`$key` = '$value'" . ',';
        }
        $x = substr($x, 0, -1);


        // UPDATE books SET `id` = 15,`title` = '2',`image` = 'images/oyOoqQJT/849762.jpg',`price` = 1 ,`description` = '1',`pages_number` = '44',`category_id` = 1 , `author_id` = '0' , `publisher_id` = '0',`quantity` = '1',`format` = 'pdf',`created_by` = '0',`is_active` = '1',`created_at` = '0000-00-00 00:00:00',`updated_at` = '0000-00-00 00:00:00' WHERE id="15";
        self::$db->table('books')->column()->values($x)->where('id="' . Controller::$id . '"')->update();
    }

    // create one item
    public static function createProduct()
    {
        self::$db = DB::sendOutside();
        self::$db->table('books')->column()->values("", Controller::$title, Controller::$imagePath,  Controller::$price,  Controller::$description, '44', Controller::$category, '0', '0', Controller::$quantity, 'pdf', '0', '1', "", "")->insert();
    }



    // update one item
    public static function getProductById($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('books')->column()->orwhere('id="' . $id . '"')->select();
        // self::$selected = self::$db;

        foreach (self::$db->result as $cc) {
            self::$selected = $cc;
        }


        // SELECT * FROM products WHERE id = :id

    }

    //delete one item
    public static function deleteProduct($id)
    {
        echo "insde";
        self::$db = DB::sendOutside();
        self::$db->table('books')->column()->values('is_active=0')->where('id="' . $id . '"')->update();
    }
}
