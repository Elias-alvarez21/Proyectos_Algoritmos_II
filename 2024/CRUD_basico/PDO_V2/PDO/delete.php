<?php
require_once "db.php";
try {
$sth = $connect->query("DELETE FROM students WHERE id = {$_POST['id']}");
}
catch(Exception $e) {
    echo 'Surgió un error'.$e->getMessage();
}


?>