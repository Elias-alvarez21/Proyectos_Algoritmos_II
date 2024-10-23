<?php
require_once '../database/db.php';

class Auth {


public static function inicio($email, $password) {

try {
    $conexion = Database::db();
    $resultado = $conexion->query("SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}' LIMIT 1");
    $user = $resultado->fetch();
    if(isset($user)) {
        session_start();
       $_SESSION['loggedIn'] = true;
       $_SESSION['user-id-active'] = $user['id_user'];  
       header("Location: ../views/form.php");  
    }
    else {
        header("HTTP/1.1 401 Unauthorized");
    }
}
catch(Exception $e) {
        echo $e->getMessage();
}



}



}






?>