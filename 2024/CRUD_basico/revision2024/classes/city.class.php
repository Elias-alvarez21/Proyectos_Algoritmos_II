<?php
require_once '../database/db.php';

class City {

public static function getAll() {

$cn = Database::db();
$sth = $cn->query('SELECT * FROM cities');
return $sth->fetchAll();
}
}




?>