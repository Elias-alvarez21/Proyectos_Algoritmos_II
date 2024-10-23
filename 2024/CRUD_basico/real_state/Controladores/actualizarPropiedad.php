<?php 
require_once '../Clases/propiedades.php';
/*require_once '../Clases/usuario.php';
$usuario=Usuarios::traerUsuario();*/
$prop=Propiedades::Modificar($_POST["id"],$_POST["titulo"],$_POST["descripcion"],$_POST["operacion"],$_POST["precio"],$_POST["divisa"],$_POST["habitaciones"],
$_POST["metros"],$_POST["direccion"],$_POST["ciudades"]/*,$usuario*/);
header("location: ../Vistas/getPropiedades.php");
?> 