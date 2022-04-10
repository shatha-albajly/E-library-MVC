<?php

namespace app\DBFunctions;

use app\controllers\offersController;
use app\DB;

class DBOffers
{
    public static $db;
    public static $books = [];
    public static $category_id;
    public static $bookInfo;
    public static $products;
    public static $selected;



    // Offers




    // create one item
    public static function createOffers()
    {
        self::$db = DB::sendOutside();
        self::$db->table('offers')->column()->values("", offersController::$title, offersController::$discount, offersController::$start_date, offersController::$end_date, "", "", offersController::$all_books, '1', '', "", "")->insert();
    }

    // get Offers
    public static  function getOffers($category_id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('offers')->column()->select();
        foreach (self::$db->result as $c) {
            $offers = $c['id'];
            self::$db->table('offers')->column()->orwhere('id="' . $offers . '"')->select();
            echo "</br>" .  "</br>";
            foreach (self::$db->result as $cc) {
                self::$books[$c['name']] = $cc;
            }
        }
    }


    // show Offers
    public static function showOffers($keyword = '')
    {
        self::$db = DB::sendOutside();
        if ($keyword) {
            self::$db->table('offers')->column()->orwhere('name')->like($keyword)->select();
        } else {
            self::$db->table('offers')->column()->select();
        }
        foreach (self::$db->result as $cc) {
            self::$products[] = $cc;
        }
    }

    // update one item
    public static function getOffersById($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('offers')->column()->orwhere('id="' . $id . '"')->select();

        foreach (self::$db->result as $cc) {
            self::$selected = $cc;
        }
    }

    public static function updateOffers()
    {
        self::$db = DB::sendOutside();
        $x = '';
        foreach (offersController::$productData as $key => $value) {

            $x = $x . "`$key` = '$value'" . ',';
        }
        $x = substr($x, 0, -1);
        self::$db->table('offers')->column()->values($x)->where('id="' . offersController::$id . '"')->update();
    }


    //delete one Offers
    public static function deleteOffers($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('offers')->column()->values('is_active=0')->where('id="' . $id . '"')->update();
    }
}