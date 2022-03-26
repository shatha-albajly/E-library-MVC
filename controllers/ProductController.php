<?php


namespace app\controllers;

use app\Router;
use app\helpers\UtilHelper;

class ProductController
{
    // index controller
    public static function index()
    {
        Router::renderView('index');
    }

    // category controller
    public static function category()
    {
        Router::renderView('category');
    }

    // book controller
    public static function book()
    {
        Router::renderView('book');
    }

    // cart controller
    public static function cart()
    {
        Router::renderView('cart');
    }


    // checkout controller
    public static function checkout()
    {
        Router::renderView('checkout');
    }


    // signup controller
    public static function signup()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // check if the number is existed
            if (empty($_POST["number"])) {
                $error['numberErr'] = "Phone number is required";
            } else {

                $signup['number'] = $_POST["number"];
            }

            // check if the name is existed
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = $_POST['name'];
            }


            // check if the password is existed
            if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
            } else {
                $password = $_POST['password'];
                if (UtilHelper::checkSize($password)) {
                    $signup['password'] = $_POST["password"];
                } else {
                    $error['passwordErr'] = "THe password should contain 3-16 letters";
                }
            }

            // check if the email is existed
            if (empty($_POST["email"])) {
                $error['emailErr']  = "Email is required";
            } else {
                $email = $_POST["email"];
                if (UtilHelper::checkEmail($email)) {
                    $signup['email'] = UtilHelper::checkEmail($email);
                } else {
                    $error['emailErr']  = "Invalid Email";
                }
            }


            // check if the re-email is existed and match the email
            if (empty($_POST["re-email"])) {
                $error['reEmailErr'] = "Email is required";
            } else {
                if ($_POST["email"] == $_POST["re-email"]) {
                    $signup['re-email'] = $_POST["re-email"];
                } else {
                    $error['reEmailErr2'] = "The emails you entered does not match";
                }
            }
        }
        header("Location: index");
        exit();
        Router::renderView('signup');
    }

    public static function login()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            // check if the email is existed
            if (empty($_POST["email"])) {
                $error['emailErr']  = "Email is required";
            } else {
                $email = $_POST["email"];
                if (UtilHelper::checkEmail($email)) {
                    $login['email'] = UtilHelper::checkEmail($email);
                } else {
                    $error['emailErr']  = "Invalid Email";
                }
            }
        }
        header("Location: index");
        exit();
        Router::renderView('login');

        // Router::renderView('signup', [
        //     'signup' => $signup,

        // ]);


    }
}