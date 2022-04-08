<?php


namespace app\controllers;

// use app\Products;
use app\Router;
use app\helpers\UtilHelper;
use app\DBFunctions;


class Controller

{
    public static ?int $id = null;
    public static string $title;
    public static string $description;
    public static string $quantity;
    public static string $category;
    public static float $price;
    public static array $imageFile;
    public static ?string $imagePath = null;
    public static $productData;

    // index controller
    public static function index()
    {


        DBFunctions::getBooks();
        Router::renderView('index', [
            "books" => DBFunctions::$books,
            "category_id" => DBFunctions::$category_id
        ]);
    }


    // category controller
    public static function category()
    {
        DBFunctions::getCategories('0');
        Router::renderView('category', ["books" => DBFunctions::$books]);
    }

    // book controller
    public static function book()
    {
        DBFunctions::getBook('1');
        Router::renderView('book', ['bookInfo' => DBFunctions::$bookInfo]);
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

    // dashboard controller
    public static function dashboard()
    {
        Router::renderView('dashboard');
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



    // login
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


    // show dashboard
    public static function bookIndex()
    {
        $keyword = $_GET['search'] ?? '';
        DBFunctions::getProducts($keyword);
        Router::renderView('dashboard/index', [
            'products' => DBFunctions::$products,
            'keyword' => $keyword
        ]);
    }



    // add book
    public static function bookCreate()
    {
        $productData = [
            'image' => ''
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productData['title'] = $_POST['title'];
            $productData['description'] = $_POST['description'];
            $productData['price'] = $_POST['price'];
            $productData['category_id'] = $_POST['category-id'];
            $productData['quantity'] = $_POST['quantity'];

            $productData['imageFile'] = $_FILES['image'] ?? null;

            self::load($productData);
            self::save();
            header('Location: /dashboard');
            exit;
        }
        Router::renderView('dashboard/create', [
            'product' => $productData
        ]);
    }


    // update book
    public static function bookUpdate()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: /dashboard');
            exit;
        }
        DBFunctions::getProductById($id);
        $productData = DBFunctions::$selected;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
            $productData['title'] = $_POST['title'];
            $productData['description'] = $_POST['description'];
            $productData['price'] = $_POST['price'];
            $productData['category_id'] = $_POST['category-id'];
            $productData['quantity'] = $_POST['quantity'];
            $productData['imageFile'] = $_FILES['image'] ?? null;


            self::$productData = $productData;


            self::load($productData);
            self::save();
            header('Location: /dashboard');
            exit;
        }

        Router::renderView('dashboard/update', [
            'product' => $productData
        ]);
    }


    // delete book
    public static function bookDelete()
    {
        $id = $_POST['id'] ?? null;
        if (!$id) {
            header('Location: /dashboard');
            exit;
        }
        if (DBFunctions::deleteProduct($id)) {
            header('Location: /products');
            exit;
        }
        header('Location: /dashboard');
        exit;
    }


    public static function load($data)
    {
        self::$id = $data['id'] ?? null;
        self::$title = $data['title'];
        self::$description = $data['description'];
        self::$category = $data['category_id'];
        self::$quantity = $data['quantity'];

        self::$price = $data['price'];
        self::$imageFile = $data['imageFile'];
        self::$imagePath = $data['image'] ?? null;
    }


    public static function save()
    {
        $errors = [];
        if (!is_dir(__DIR__ . '/../public/images')) {
            mkdir(__DIR__ . '/../public/images');
        }

        if (!self::$title) {
            $errors[] = 'Product title is required';
        }

        if (!self::$price) {
            $errors[] = 'Product price is required';
        }

        if (empty($errors)) {
            if (self::$imageFile &&  self::$imageFile['tmp_name']) {
                if (self::$imagePath) {
                    unlink(__DIR__ . '/../public/' .  self::$imagePath);
                }
                self::$imagePath = 'images/' . UtilHelper::randomString(8) . '/' .  self::$imageFile['name'];
                mkdir(dirname(__DIR__ . '/../public/' .  self::$imagePath));
                move_uploaded_file(self::$imageFile['tmp_name'], __DIR__ . '/../public/' .  self::$imagePath);
            }

            // DBFunctions::createProduct();

            // $db = Database::$db;
            if (self::$id) {
                echo "ffff";
                DBFunctions::updateProduct();
            } else {
                DBFunctions::createProduct();
            }
        }
    }
}
