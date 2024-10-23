<?php 
require_once '../Clases/propiedades.php';
$eliminarPropiedad =Propiedades::Eliminar($_GET["id"]);
header("location:../Vistas/getPropiedades.php");
?>