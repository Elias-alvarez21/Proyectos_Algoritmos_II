<?php 
require_once '../Clases/login.php';
session_start();

if((isset($_POST['email']) && !empty($_POST['email'])) &&  (isset($_POST['contra']) && !empty($_POST['contra'])))
{   if(Login::login($_POST["email"],$_POST["contra"]))
    {
        header("Location: ../coches.php");
    }else{
        $mensaje="Datos incorrectos";
        //header("Location: ../Index.html?$mensaje");
    }
}
echo"     /";
var_dump($_POST);
?>