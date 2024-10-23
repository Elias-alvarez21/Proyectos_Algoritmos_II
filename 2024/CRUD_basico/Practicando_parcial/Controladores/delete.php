<?php 
require_once "../Clases/Task.php";
$tarea=Task::Delete($_GET["id"]);
#header("location: ../Vistas/list.php");
?>