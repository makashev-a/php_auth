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

    // open the requested page
    public static function enable()
    {
        $query = $_GET["q"];

        foreach (self::$list as $route) {
            if ($route["uri"] === '/' . $query) {
                require_once "views/pages/" . $route["page"] . ".php";
            }
        }

    }
}