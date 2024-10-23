<?php

class Database
{
    private static $db;
    private static $user = 'root';
    private static $password = '';
    private static $host = 'localhost';
    private static $database = 'institute';

    public static function Connect()
    {
        $connectionString = 'mysql:host='.self::$host.';dbname='.self::$database.'; charset=utf8';
        self::$db = new PDO($connectionString, self::$user, self::$password);
        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return self::$db;
    }
}




?>