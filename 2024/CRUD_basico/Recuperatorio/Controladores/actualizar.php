<?php 
require_once "../Clases/Movies.php";
session_start();

$x=new Movies($_POST["titulo"],$_POST["director"],$_POST["anio_estreno"],$_POST["genero"],$_POST["sinopsis"],$_POST["actores_principales"],$_POST["rating"],$_SESSION["user_id"],$_POST["id"]);
$x->Update();
header("location: ../Vistas/movies.php");
#var_dump($x);
?>