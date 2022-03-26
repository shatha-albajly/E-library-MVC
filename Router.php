<?php

namespace app;

class Router
{
    private static array $getRoutes = [];
    private static array $postRoutes = [];

    // get router
    public static function get($url, $fn)
    {
        self::$getRoutes[$url] = $fn;
    }

    // post router
    public static function post($url, $fn)
    {
        self::$postRoutes[$url] = $fn;
    }

    // resolve router
    public static function resolve()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = $_SERVER['PATH_INFO'] ?? '/';
        if ($method === 'GET') {
            $fn = self::$getRoutes[$url] ?? null;
        } else {
            $fn = self::$postRoutes[$url] ?? null;
        }
        if (!$fn) {
            echo 'Page not found';
            exit;
        }
        echo call_user_func($fn);
    }

    // render views router
    public static function renderView($view, $params = [])
    {
        foreach ($params as $key => $value) {

            $$key = $value;
        }
        ob_start();
        include __DIR__ . "/views/$view.php";
        $content = ob_get_clean();
        include __DIR__ . "/views/_layout.php";
    }
}