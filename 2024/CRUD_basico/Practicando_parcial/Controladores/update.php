<?php 
require_once "../Clases/Task.php";
$caca=new Task($_POST["task_name"],$_POST["description"],$_POST["start_date"],$_POST["end_date"],$_POST["area_id"],$_POST["priority"],$_POST["status"],$_POST["id"]);
echo $caca->Update();
#var_dump($_POST);

#header("location: ../Vistas/list.php");
?>