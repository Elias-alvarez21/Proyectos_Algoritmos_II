<?php 
require_once '../Clases/usuarios.php';
session_start();
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['contra']) && !empty($_POST['contra'])) {
    if (Usuarios::login($_POST['email'], $_POST['contra'])) {
        header("Location: ../Vistas/getPropiedades.php");
        exit(); 
    } else {
        $_SESSION['error'] = "el usuario o la contraseña son incorrectos";
        header("Location: ../Vistas/login.php");
        exit(); 
    }
} else {
    // Si las variables POST no están establecidas o están vacías
    echo "Por favor completa todos los campos.";
    //var_dump($_POST);
}
?>