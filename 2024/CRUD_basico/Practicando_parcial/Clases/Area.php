<?php 
require_once "Conexion.php";
class Area{
   
    public static function getAll()
    {
        $todo=Conexion::conectar();
        $x=$todo->query("SELECT * FROM areas");
        return $x->fetchAll();
    }

}
?>