<?php 
require_once 'conexion.php';
class Categoria{
    private int $id;
    private string $nombre;

    public function __construct($nombre,$id=0){
        $this->nombre = $nombre;
        $this->id = $id;
    }

    public static function mostrarTodo()
    {
        $conexion = Conexion::Connect();
        $sth = $conexion->query("SELECT * FROM categorias");
        $categorias = $sth->fetchAll();
        return $categorias;
    }
}
?>