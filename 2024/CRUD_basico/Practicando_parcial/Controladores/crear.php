<?php 
require_once "../Clases/Task.php";
$tarea=new Task($_POST["task_name"],$_POST["description"],$_POST["start_date"],$_POST["end_date"],$_POST["area_id"],$_POST["priority"],$_POST["status"],1);
echo $tarea->Create();
var_dump($_POST);
#header("location: ../Vistas/list.php");
?>