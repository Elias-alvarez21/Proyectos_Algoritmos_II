<?php 
require_once "../Clases/Movies.php";
//require_once "../Clases/Auth.php";
session_start();

$x=new Movies($_POST["titulo"],$_POST["director"],$_POST["anio_estreno"],$_POST["genero"],$_POST["sinopsis"],$_POST["actores_principales"],$_POST["rating"],$_SESSION["user_id"]);
$x->Create();
header("location: ../Vistas/movies.php");
#var_dump($_SESSION["user_id"]);
?>