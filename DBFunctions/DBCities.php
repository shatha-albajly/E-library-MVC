<?php

namespace app\DBFunctions;

use app\controllers\CitiesController;
use app\DB;

class DBCities
{
    public static $db;
    public static $books = [];
    public static $cities_id;
    public static $bookInfo;
    public static $products;
    public static $selected;



    // Cities




    // create one item
    public static function createCities()
    {
        self::$db = DB::sendOutside();
        self::$db->table('cities')->column()->values("", CitiesController::$name, '1', '', "", "")->insert();
    }




    // show cities
    public static function showCities($keyword = '')
    {
        self::$db = DB::sendOutside();
        if ($keyword) {
            self::$db->table('cities')->column()->orwhere('name')->like($keyword)->select();
        } else {
            self::$db->table('cities')->column()->select();
        }
        foreach (self::$db->result as $cc) {
            self::$products[] = $cc;
        }
    }

    // update one item
    public static function getCitiesById($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('cities')->column()->orwhere('id="' . $id . '"')->select();

        foreach (self::$db->result as $cc) {
            self::$selected = $cc;
        }
    }

    public static function updateCities()
    {
        self::$db = DB::sendOutside();
        $x = '';
        foreach (CitiesController::$productData as $key => $value) {

            $x = $x . "`$key` = '$value'" . ',';
        }
        $x = substr($x, 0, -1);
        self::$db->table('cities')->column()->values($x)->where('id="' . CitiesController::$id . '"')->update();
    }


    //delete one cities
    public static function deleteCities($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('cities')->column()->values('is_active=0')->where('id="' . $id . '"')->update();
    }
}