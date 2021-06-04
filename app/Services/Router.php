<?php


namespace App\Services;


class Router
{
    // urls array
    private static array $list = [];

    // add urls to $list array
    public static function page($uri, $page_name)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function post($uri, $class, $method, $formdata = false, $files = false)
    {
        self::$list[] = [
            "uri" => $uri,
            "class" => $class,
            "method" => $method,
            "post" => true,
            "formdata" => $formdata,
            "files" => $files
        ];
    }

    // open the requested page with params
    public static function enable()
    {
        $query = $_GET["q"];

        foreach (self::$list as $route) {
            if ($route["uri"] === '/' . $query) {
                if ($route["post"] === true && $_SERVER["REQUEST_METHOD"] === "POST") {
                    $action = new $route["class"];
                    $method = $route["method"];
                    if ($route["formdata"] && $route["files"]) {
                        $action->$method($_POST, $_FILES);
                    } elseif ($route["formdata"] && !$route["files"]) {
                        $action->$method($_POST);
                    } else {
                        $action->$method();
                    }
                    die();
                } else {
                    require_once "views/pages/" . $route["page"] . ".php";
                    die();
                }
            }
        }
        self::error('404');
    }

    public static function error($error)
    {
        require_once "views/errors/" . $error . ".php";
    }

    public static function redirect($uri)
    {
        header('Location: ' . $uri);
    }

}