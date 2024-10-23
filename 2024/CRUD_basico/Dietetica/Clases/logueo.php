<?php 
require_once "conexion.php";

class Logueo{

    public static function log($email,$pass){
        $arr=array();
        $con=Conexion::Connect();
        $q=$con->query("SELECT user_id,email,password from users where email='$email' AND password='$pass';");
        $arr=$q->fetchAll();
        try{
            if(isset($arr[0]->user_id))
            {   
                $_SESSION["x"]=true;#1
                return true;
            }else{
                #$_SESSION["x"]=false;
            }
        }catch(Exception $e){
            return false;
        }

    }
    public static function verf(){
        if(!isset($_SESSION["x"]))
        {   
            header("location: login.php");
        }
    }
}
?>