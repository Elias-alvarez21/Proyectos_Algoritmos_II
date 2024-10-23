<?php
require_once 'conexion.php';

class Propiedades
{
    private int $id;
    private string $titulo;
    private string $descripcion;
    private string $tipo_operacion;
    private int $precio;
    private string $divisa;
    private string $habitaciones;
    private int $metros;
    private string $direccion;
    private int $idCiudad;
  

    public function __construct($titulo, $descripcion,$tipo_operacion,$precio,$divisa,$habitaciones,$metros, $direccion,$idCiudad,$id=0)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->tipo_operacion = $tipo_operacion;
        $this->precio = $precio;
        $this->divisa = $divisa;
        $this->habitaciones = $habitaciones;
        $this->metros = $metros;
        $this->direccion = $direccion;
        $this->idCiudad = $idCiudad;

    
    }

    public static function traerTodo()
    {
        $con=Conexion::Connect();
        $sql=$con->query("SELECT * FROM propiedades");
        $propiedades=$sql->fetchAll();
        return $propiedades;
    }

    public static function Crear($titulo, $descripcion, $tipo_operacion, $precio, $divisa, $habitaciones, $metros, $direccion, $idCiudad)
    {
        try{
            $con=Conexion::Connect();
            $con->query("INSERT INTO propiedades(titulo,descripcion,tipo_operacion,precio,divisa,habitaciones,metros_cuadrados,direccion,id_ciudad) 
            VALUES ('{$titulo}','{$descripcion}','{$tipo_operacion}','{$precio}','{$divisa}','{$habitaciones}','{$metros}','{$direccion}','{$idCiudad}')");
            echo"se cargaron correctaente los datos";
        }catch(PDOException $e){
            $mensaje="errro en el Crear";
            return $mensaje;
        }
    }

    public static function Eliminar($id)
    {
        try{
            $con=Conexion::Connect();
            $con->query("DELETE FROM propiedades WHERE id={$id}");
            return true;
        }catch(PDOException $e){
            $mensaje="error en el Eliminar";
            return $mensaje;
        }
    }
    public static function obtenerId($id) {
        $array = array();
        try {    
            $connect = Conexion::Connect();
            $sth = $connect->query("SELECT * FROM propiedades WHERE id = {$id}");
            $array=$sth->fetchAll();
            return $array[0];
        }catch(Exception $e)
         {
            return null;    
        }
    }

    public static function Modificar($id, $titulo, $descripcion, $tipo_operacion, $precio, $divisa, $habitaciones, $metros, $direccion, $idCiudad)
    {
        //try{
            $con=Conexion::Connect();
            $con->query("UPDATE propiedades SET titulo='{$titulo}', descripcion='{$descripcion}',tipo_operacion='{$tipo_operacion}', precio='{$precio}',
             divisa='{$divisa}', habitaciones='{$habitaciones}', metros_cuadrados='{$metros}', direccion='{$direccion}', id_ciudad='{$idCiudad}' WHERE id='{$id}'");
            echo"se actualizaron correctaente los datos";
        /*}catch(PDOException $e){
            $mensaje="errro en el Modificar";
            return $mensaje;
        }*/
    }
}
?>