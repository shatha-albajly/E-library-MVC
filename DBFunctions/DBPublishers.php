<?php

namespace app\DBFunctions;

use app\controllers\publishersController;
use app\DB;

class DBPublishers
{
    public static $db;
    public static $books = [];
    public static $category_id;
    public static $bookInfo;
    public static $products;
    public static $selected;



    // publishers




    // create one item
    public static function createPublishers()
    {
        self::$db = DB::sendOutside();
        self::$db->table('publishers')->column()->values("", publishersController::$name, publishersController::$phone, publishersController::$alt_phone, publishersController::$fax, publishersController::$email, publishersController::$address, publishersController::$country,  publishersController::$imagePath, '1', '', "", "")->insert();
    }

    // get publishers
    public static  function getPublishers($category_id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('publishers')->column()->select();
        foreach (self::$db->result as $c) {
            $category = $c['id'];
            self::$db->table('publishers')->column()->orwhere('id="' . $category . '"')->select();
            echo "</br>" .  "</br>";
            foreach (self::$db->result as $cc) {
                self::$books[$c['name']] = $cc;
            }
        }
    }


    // show publishers
    public static function showPublishers($keyword = '')
    {
        self::$db = DB::sendOutside();
        if ($keyword) {
            self::$db->table('publishers')->column()->orwhere('name')->like($keyword)->select();
        } else {
            self::$db->table('publishers')->column()->select();
        }
        foreach (self::$db->result as $cc) {
            self::$products[] = $cc;
        }
    }

    // update one item
    public static function getPublishersById($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('publishers')->column()->orwhere('id="' . $id . '"')->select();

        foreach (self::$db->result as $cc) {
            self::$selected = $cc;
        }
    }

    public static function updatePublishers()
    {
        self::$db = DB::sendOutside();
        $x = '';
        foreach (publishersController::$productData as $key => $value) {
            if ($key == 'imageFile') {

                continue;
            } else
                $x = $x . "`$key` = '$value'" . ',';
        }
        $x = substr($x, 0, -1);
        self::$db->table('publishers')->column()->values($x)->where('id="' . publishersController::$id . '"')->update();
    }


    //delete one Publishers
    public static function deletePublishers($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('publishers')->column()->values('is_active=0')->where('id="' . $id . '"')->update();
    }
}
