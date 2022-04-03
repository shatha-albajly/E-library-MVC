<?php

namespace app;

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





    private function __construct()
    {
    }


    public static  function getCategories($category_id)
    {
        echo "getCategory";
        self::$db = DB::sendOutside();
        self::$db->table('categories')->column()->select();
        foreach (self::$db->result as $c) {
            $category = $c['id'];
            self::$db->table('books')->column()->orwhere('category_id="' . $category . '"')->select();
            echo "</br>" .  "</br>";
            foreach (self::$db->result as $cc) {
                self::$books[$c['name']] = $cc;
            }
        }
    }

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
        self::$db->table('books')->column()->values('is_active=0')->where('id="' . Controller::$id . '"')->update();
        // $statement = $this->pdo->prepare("UPDATE products SET title = :title, 
        //                                 image = :image, 
        //                                 description = :description, 
        //                                 price = :price WHERE id = :id");
        // $statement->bindValue(':title', $product->title);
        // $statement->bindValue(':image', $product->imagePath);
        // $statement->bindValue(':description', $product->description);
        // $statement->bindValue(':price', $product->price);
        // $statement->bindValue(':id', $product->id);

        // $statement->execute();
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