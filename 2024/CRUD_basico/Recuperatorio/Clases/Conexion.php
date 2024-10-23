<?php 
class Conexion{

    private static $user="root";
    private static $pass="";

    public static function Con(){

        try{
        $con=new PDO("mysql:host=127.0.0.1:33065;dbname=MovieCatalog;",self::$user,self::$pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        #$con->setAttribute();
        return $con;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
?>