<?php
require '../Clases/platos.php';
$nuevoPlato=new Platos($_POST["nombre"],$_POST["idCategoria"],$_POST["idReceta"]);
$nuevoPlato->crearPlato();
var_dump($_POST);
?>  