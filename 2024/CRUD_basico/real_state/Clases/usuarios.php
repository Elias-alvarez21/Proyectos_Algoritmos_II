<?php 
require_once 'conexion.php';
class Usuarios{//logueo

    public static function login($gmail,$contra)
    {
        $vec=array();

        $conexion = Conexion::Connect();
        $sth=$conexion->query("SELECT * FROM usuarios where email='{$gmail}' and contraseña='{$contra}'");
        $vec=$sth->fetchAll();
        if(isset($vec[0]->id))
        {
            $_SESSION["usuario"]=true;
            return true;
        }else
        {
            return false;
        }
    }

    public static function Verificador()
    {
        if(empty($_SESSION["usuario"]))
        {
            header("location: login.php");
        }
    }

    public static function CierreSesion()
    {
        if(session_status()==PHP_SESSION_NONE)
        {
            session_start();
        }
        $_SESSION=array();
        session_destroy();
        header("location: ../login.php");
    }
}
?>