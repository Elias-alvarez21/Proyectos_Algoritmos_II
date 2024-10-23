<?php 
class Conexion{
    private static $user="root";
    private static $pass="";


    public static function conectar()
    {
        try{
            $con=new PDO("mysql:host=127.0.0.1:33065;dbname=parcial",self::$user,self::$pass);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            return $con;
        }catch(PDOException $mensaje)
        {
            die($mensaje->getMessage());
        }
    }
}
?>