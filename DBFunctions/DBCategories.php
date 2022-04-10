<?php

namespace app\DBFunctions;

use app\controllers\categoriesController;
use app\DB;

class DBCategories
{
    public static $db;
    public static $books = [];
    public static $category_id;
    public static $bookInfo;
    public static $products;
    public static $selected;



    // categories




    // create one item
    public static function createCategories()
    {
        self::$db = DB::sendOutside();
        echo "fffffffffffffffffffffffffffffffffffffff";
        self::$db->table('categories')->column()->values("", categoriesController::$name, categoriesController::$imagePath, '1', '', "", "")->insert();
    }

    // get categories
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


    // show categories
    public static function showCategories($keyword = '')
    {
        self::$db = DB::sendOutside();
        if ($keyword) {
            self::$db->table('categories')->column()->orwhere('name')->like($keyword)->select();
        } else {
            self::$db->table('categories')->column()->select();
        }
        foreach (self::$db->result as $cc) {
            self::$products[] = $cc;
        }
    }

    // update one item
    public static function getCategoriesById($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('categories')->column()->orwhere('id="' . $id . '"')->select();

        foreach (self::$db->result as $cc) {
            self::$selected = $cc;
        }
    }

    public static function updateCategories()
    {
        self::$db = DB::sendOutside();
        $x = '';
        foreach (categoriesController::$productData as $key => $value) {
            if ($key == 'imageFile') {

                continue;
            } else
                $x = $x . "`$key` = '$value'" . ',';
        }
        $x = substr($x, 0, -1);
        self::$db->table('categories')->column()->values($x)->where('id="' . categoriesController::$id . '"')->update();
    }


    //delete one category
    public static function deleteCategories($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('categories')->column()->values('is_active=0')->where('id="' . $id . '"')->update();
    }
}