<?php
require_once 'conexion.php';
class Platos
{
    private int $id;
    private string $nombre;
    private int $id_categoria;
    private int $id_receta;

    public function __construct($nombre,$id_categoria,$id_receta, $id=0)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->id_categoria = $id_categoria;
        $this->id_receta = $id_receta;
    }

    public static function mostrarTodo()
    {
        $conexion = Conexion::Connect();
        $sth = $conexion->query("SELECT * FROM platos");
        $platos = $sth->fetchAll();
        return $platos;
    }
    // public function crearPlato() {
    //     $conexion = Conexion::Connect();
    //     $sql = "INSERT INTO platos (nombre_plato, id_categoria, id_reseta) VALUES (:nombre, :id_categoria, :id_receta)";
    //     $stmt = $conexion->prepare($sql);

    //     try {
    //         $stmt->execute([
    //             ':nombre' => $this->nombre,
    //             ':id_categoria' => $this->idCategoria,
    //             ':id_receta' => $this->idReceta
    //         ]);
    //         echo "Plato creado exitosamente";
    //     } catch (PDOException $e) {
    //         echo "Error al crear el plato: " . $e->getMessage();
    //     }
    // }
    public function crearPlato()#
    {
        try {
            $conexion = Conexion::Connect();
            $sth = $conexion->prepare("INSERT INTO platos (nombre_plato, id_categoria, id_reseta) VALUES (:nombre, :id_categoria, :id_receta)");
            
            $sth->bindParam(':nombre_plato', $nombre);
            $sth->bindParam(':id_categoria', $id_categoria);
            $sth->bindParam(':id_reseta', $id_receta);
    
            if ($sth->execute()) {
                echo "Plato creado exitosamente.";
            } else {
                echo "Error al crear el plato.";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
}
?>