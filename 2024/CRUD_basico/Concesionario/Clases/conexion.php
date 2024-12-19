<?php
class Conexion
{
    private static $db;
    private static $user = 'root';
    private static $password = '';
    private static $host = '127.0.0.1:3307';
    private static $database = 'ejercicio6';

    public static function Connect()
    {
        if (!self::$db) {
            $connectionString = 'mysql:host='.self::$host.';dbname='.self::$database.';charset=utf8';
            self::$db = new PDO($connectionString, self::$user, self::$password);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        return self::$db;
    }
}
?>
