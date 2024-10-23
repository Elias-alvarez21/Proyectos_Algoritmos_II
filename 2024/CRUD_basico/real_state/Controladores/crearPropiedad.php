<?php
require_once '../Clases/propiedades.php';
$prop=Propiedades::Crear($_POST["titulo"],$_POST["descripcion"],$_POST["operacion"],$_POST["precio"],$_POST["divisa"],$_POST["habitaciones"],
$_POST["metros"],$_POST["direccion"],$_POST["ciudades"]);
header("location: ../Vistas/getPropiedades.php");
?>