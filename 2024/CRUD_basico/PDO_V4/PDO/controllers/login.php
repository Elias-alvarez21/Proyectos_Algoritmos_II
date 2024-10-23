<?php
session_start();
require_once '../classes/logueo.php';
if (isset($_POST['gmail']) && !empty($_POST['gmail']) && isset($_POST['contraseña']) && !empty($_POST['contraseña'])) {
    if (Logueo::login($_POST['gmail'], $_POST['contraseña'])) {
        header("Location: ../list.php");
        exit(); 
    } else {
        $_SESSION['error'] = "el usuario o la contraseña son incorrectos";
        header("Location: ../logueo.php");
        exit(); 
    }
} else {
    // Si las variables POST no están establecidas o están vacías
    echo "Por favor completa todos los campos.";
    var_dump($_POST);
}
?>
