<?php 
class Conexion{
    private $host="127.0.0.1:33065";
    private static $user="root";
    private static $pass="";
    private $dbname="parcial";

    public static function Conex(){
        try{
            $conec=new PDO("mysql:host=127.0.0.1:33065;dbname=parcial",self::$user,self::$pass);
            $conec->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION/*,PDO::FETCH_OBJ*/);
            return $conec;
        }
    catch(PDOException $mensaje)
    {

       die($mensaje->getMessage()); 
    }
}
}
?>