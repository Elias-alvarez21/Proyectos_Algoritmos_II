<?php 
require_once "../Clases/Auth.php";
var_dump($_POST);
if(!empty($_POST["email"]) && !empty($_POST["password"]))
{
    if (Logueo::log($_POST["email"],$_POST["password"])) {
        header("location: ../Vistas/movies.php");
        #$mensaje="LOGUEO EXITOSO";
        #echo $mensaje;
    } else {
        header("location: ../Vistas/login.php");
        #$mensaje="ERROR -";
       #echo $mensaje;
        #var_dump(Logueo::log($_POST["email"],$_POST["password"]));
    }
    
}

?>