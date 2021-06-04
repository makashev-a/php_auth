<?php


namespace App\Services;


class App
{
    // loads all self methods
    public static function start()
    {
        self::libs();
        self::db();
    }

    // reads every lib from app.php $libs array and require them
    public static function libs()
    {
        $config = require_once "config/app.php";
        foreach ($config["libs"] as $lib) {
            require_once "libs/" . $lib . ".php";
        }
    }

    // configures the db connection
    public static function db()
    {
        $config = require_once "config/db.php";

        if ($config["enable"]) {
            \R::setup('mysql:host=' . $config["host"] . ';port=' . $config["port"] . ';dbname=' . $config["db"] . '',
                $config["username"], $config["password"]);

            if (!\R::testConnection()) {
                die("Error. Database connection problem");
            }
        }
    }
}