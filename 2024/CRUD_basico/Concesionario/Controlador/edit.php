<?php
require '../Clases/coches.php';
$coche = new Coches($_POST["matricula"],$_POST["marca"],$_POST["modelo"],$_POST["color"],$_POST["precio"],$_POST["id"]);
$coche->updateCoches();
?>