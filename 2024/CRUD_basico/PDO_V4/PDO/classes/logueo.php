<?php 
require_once 'database.php';

class Logueo 
{

public static function login($gmail,$contraseña)
{
    try{
    $vec=array();
    $db=Database::Connect();
    $var=$db->query("SELECT id FROM users WHERE email = '{$gmail}' AND password ='{$contraseña}' LIMIT 1");
    $vec=$var->fetchAll();
    if(!empty($vec[0]->id))
    {
        $_SESSION["Validado?"]=true;
        return true;
    }else
    {  
        //$_SESSION["Validado?"]="usuario no logueado";

        //$mesaje="error al encontrar usuario logueado";
        return false;
    }
}catch(Exception $mensaje){
    echo 'Error: ' . $mensaje->getMessage();
}

}

public static function verificacion()
{
    if(!isset($_SESSION["Validado?"]))
    {
        header("Location: logueo.php");
    }
}

public static function logout() 
{
    if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    }
    $_SESSION=array();
    session_destroy();
    header("Location: ../logueo.php");
    
}
}
?>