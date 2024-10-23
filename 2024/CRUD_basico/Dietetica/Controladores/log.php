<?php 
require_once "../Clases/logueo.php";
if((!empty($_POST["email"]) &&(!empty($_POST["password"]))))
{
    if(Logueo::log($_POST["email"],$_POST["password"])){
        #$mensaje="LOGUEO EXITOSO ";
        #echo $mensaje;
        header("location: ../categorias.php");
    }
    else{
        $mensaje="LOGUEO ERRONEO";
        echo $mensaje;
        var_dump($_POST);
    }
}
?>