<?php


namespace App\Core;


class DB
{
    private static $connection = null;

    public static function getConnection()
    {
        if(is_null(static::$connection)){
            echo 'fdsfdssdsd';
            return self::$connection = new \mysqli('localhost', 'homestead', 'secret', 'tms');
        }
        return self::$connection;

    }
}