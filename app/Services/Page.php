<?php


namespace App\Services;


class Page
{
    // using to require view components
    public static function part($part_name)
    {
        require_once "views/components/" . $part_name . ".php";
    }
}