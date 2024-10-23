<?php 
require_once '../Clases/usuarios.php';

Usuarios::CierreSesion();

header("location: ../Vistas/login.php");
?>