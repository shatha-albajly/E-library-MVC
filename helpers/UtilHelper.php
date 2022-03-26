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
}