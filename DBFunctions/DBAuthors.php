<?php

namespace app\DBFunctions;

use app\controllers\AuthorsController;
use app\DB;

class DBAuthors
{
    public static $db;
    public static $books = [];
    public static $authors_id;
    public static $bookInfo;
    public static $products;
    public static $selected;



    // authors




    // create one item
    public static function createAuthors()
    {
        self::$db = DB::sendOutside();
        self::$db->table('authors')->column()->values("", AuthorsController::$name,  '1', '', "", "")->insert();
    }

    // get authors
    public static  function getAuthors($authors_id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('authors')->column()->select();
        foreach (self::$db->result as $c) {
            $authors = $c['id'];
            self::$db->table('books')->column()->orwhere('id="' . $authors_id . '"')->select();
            echo "</br>" .  "</br>";
            foreach (self::$db->result as $cc) {
                self::$books[$c['name']] = $cc;
            }
        }
    }


    // show authors
    public static function showAuthors($keyword = '')
    {
        self::$db = DB::sendOutside();
        if ($keyword) {
            self::$db->table('authors')->column()->orwhere('name')->like($keyword)->select();
        } else {
            self::$db->table('authors')->column()->select();
        }
        foreach (self::$db->result as $cc) {
            self::$products[] = $cc;
        }
    }

    // update one item
    public static function getAuthorsById($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('authors')->column()->orwhere('id="' . $id . '"')->select();

        foreach (self::$db->result as $cc) {
            self::$selected = $cc;
        }
    }

    public static function updateAuthors()
    {
        self::$db = DB::sendOutside();
        $x = '';
        foreach (AuthorsController::$productData as $key => $value) {

            $x = $x . "`$key` = '$value'" . ',';
        }
        $x = substr($x, 0, -1);
        self::$db->table('authors')->column()->values($x)->where('id="' . AuthorsController::$id . '"')->update();
    }


    //delete one authors
    public static function deleteAuthors($id)
    {
        self::$db = DB::sendOutside();
        self::$db->table('authors')->column()->values('is_active=0')->where('id="' . $id . '"')->update();
    }
}