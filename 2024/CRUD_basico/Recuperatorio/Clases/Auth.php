<?php 
require_once "Conexion.php";

class Logueo{

   public static function log($email,$pass)
   {
      try{
         //$arr=array();
         $con=Conexion::Con();
         $Q=$con->query("SELECT user_id, email, password FROM users WHERE email = '{$email}' AND password = '{$pass}';"); 
         $arr=$Q->fetch(PDO::FETCH_OBJ);

         session_start();
         $id=$arr->user_id;

         //echo $arr;
         $_SESSION["user_id"]=$id;
         if(isset($_SESSION))
         {
            return true;
            $_SESSION["X"]=true;
         }
         else{
            return false;
         }
      }catch(Exception $e){
         $mensaje="ERROR EN EL METODO log".$e->getMessage();
         return $mensaje;
      }
   }

   public static function verif()//ESTO NO ANDA BIEN
   {
      /*if(!isset($_SESSION["X"]))
      {
         //var_dump($_SESSION["X"]);
         header("location: login.php");
      }*/
   }
}
?> 