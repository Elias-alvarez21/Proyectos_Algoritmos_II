<?php
require '../Clases/coches.php';
$coche = Coches::deleteCoches($_GET["id"]);
var_dump($_GET)
?>