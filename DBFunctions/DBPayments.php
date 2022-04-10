<?php

namespace app\DBFunctions;

use app\controllers\paymentsController;
use app\DB;

class DBPayments
{
    public static $db;
    public static $books = [];
    public static $payments_id;
    public static $bookInfo;
    public static $products;
    public static $selected;



    // payments




    // create one item
    public static function createPayments()
    {
        self::$db = DB::sendOutside();
        self::$db->table('payements')->column()->values("", paymentsController::$name, paymentsController::$imagePath, '1', '', "", "")->insert();
    }

    // get payments
    public static  function getPayments($payments)
    {
        self::$db = DB::sendOutside();
        self::$db->table('payements')->column()->select();
        foreach (self::$db->result as $c) {
            $payments = $c['id'];
            self::$db->table('payements')->column()->orwhere('id="' . $payments . '"')->select();
            echo "</br>" .  "</br>";
            foreach (self::$db->result as $cc) {
                self::$books[$c['name']] = $cc;
            }
        }
    }


    // show payments
    public static function showPayments($keyword = '')
    {
        self::$db = DB::sendOutside();
        if ($keyword) {
            self::$db->table('payements')->column()->orwhere('name')->like($keyword)->select();
        } else {
            self::$db->table('payements')->column()->select();
        }
        foreach (self::$db->result as $cc) {
            self::$products[] = $cc;
        }
    }

    // update one item
    public static function getPaymentsById($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('payements')->column()->orwhere('id="' . $id . '"')->select();

        foreach (self::$db->result as $cc) {
            self::$selected = $cc;
        }
    }

    public static function updatePayments()
    {
        self::$db = DB::sendOutside();
        $x = '';
        foreach (paymentsController::$productData as $key => $value) {
            if ($key == 'imageFile') {

                continue;
            } else
                $x = $x . "`$key` = '$value'" . ',';
        }
        $x = substr($x, 0, -1);
        self::$db->table('payements')->column()->values($x)->where('id="' . paymentsController::$id . '"')->update();
    }


    //delete one payments
    public static function deletePayments($id)
    {
        echo "fffffffffffff";
        self::$db = DB::sendOutside();
        self::$db->table('payements')->column()->values('is_active=0')->where('id="' . $id . '"')->update();
    }
}