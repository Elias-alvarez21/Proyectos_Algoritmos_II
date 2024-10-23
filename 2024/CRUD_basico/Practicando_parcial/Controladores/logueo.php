<?php 
require_once "../Clases/Auth.php";
session_start();
if(!empty($_POST["email"] && !empty($_POST["password"])))
{
    if(Auth::Log($_POST["email"],$_POST["password"]))
    {
        header("location: ../Vistas/list.php");
    }else{
        var_dump($_POST);
        #header("location: ../Vistas/login.php");
    }
    exit();
}
?>