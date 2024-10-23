<?php

class Database
{
    private static $db;
    private const USER = 'root';
    private const PASSWORD = '';
    private const HOST = '127.0.0.1:33065';
    private const DATABASE = 'PDO_V4';

    public static function Connect()
    {
        $connectionString = 'mysql:host=' . self::HOST . ';dbname=' . self::DATABASE . ';charset=utf8';
        try {
            self::$db = new PDO($connectionString, self::USER, self::PASSWORD);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return self::$db;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>
