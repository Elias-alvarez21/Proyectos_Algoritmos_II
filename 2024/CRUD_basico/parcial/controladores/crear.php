<?php 
require_once "../clases/tareas.php";
var_dump($_POST);
$x=new Tareas($_POST["task_name"],$_POST["area_id"],$_POST["start_date"],$_POST["end_date"],$_POST["priority"],$_POST["state"],$_POST["idUsuario"],$_POST["description"]);//faltan mandar datos
$x->crear();



//var_dump(Conexion::Conex())
?>