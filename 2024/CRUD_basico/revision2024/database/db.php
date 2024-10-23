<?php

class Database {

    static $db;

public static function db() {
    try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    self::$db = new PDO("mysql:host=$servername;dbname=real_estate", $username, $password);
    self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return self::$db;
    
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }

    }

}


?>