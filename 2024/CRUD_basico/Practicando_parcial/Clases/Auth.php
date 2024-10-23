<?php 
require_once "Conexion.php";
class Auth{

    public static function Log($email,$pass)
    {
        try{
        $arr=array();
        $con=Conexion::conectar();
        $sth=$con->query("SELECT user_id, email, password FROM users WHERE email ='$email' AND password = '$pass';");
        
        $arr=$sth->fetchAll();
        if(isset($arr[0]->user_id))
        {
            $_SESSION["X"]=true;
            
            return true;
        }
        else
        return false;

        }catch(Exception $e){
        return false;
    }
    }

    public static function verif(){
        if(!isset($_SESSION["X"]))
        
            header("location: login.php");
        
    }
}
?>