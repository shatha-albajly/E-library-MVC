<?php

namespace app\helpers;

class UtilHelper
{
    // Check if email exist
    public static function checkEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
            $signup['email'] = $_POST["email"];
        } else {
            return null;
        }
    }

    // Check the length
    public static function checkSize($password)
    {

        if ($password > 3 and $password < 17) {
            return True;
        } else {
            return False;
        }
    }

    // get random names
    public static function randomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }

        return $str;
    }
}