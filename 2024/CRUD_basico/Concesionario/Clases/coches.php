<?php
require_once 'conexion.php';

class Coches{
    private int $id;
    private string $matricula;
    private string $marca;
    private string $modelo;
    private string $color;
    private int $precio;

    public function __construct($matricula,$marca,$modelo,$color,$precio,$id=0)
    {
        $this->id=$id;
        $this->matricula=$matricula;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->color=$color;
        $this->precio=$precio;

        //createCoches();
        
    }
    
    public static function getCoches(){
    
        $db=Conexion::Connect();
        $sth=$db->query("SELECT * FROM coches");
        $coches=$sth->fetchAll();
        return $coches;
    }
    public function createCoches()
    {
        try {
            $db = Conexion::Connect();
            $sth = $db->prepare("INSERT INTO coches (matricula, marca, modelo, color, precio) VALUES (:matricula, :marca, :modelo, :color, :precio)");
            
            // Enlaza los valores de los parámetros
            $sth->bindParam(':matricula', $this->matricula);
            $sth->bindParam(':marca', $this->marca);
            $sth->bindParam(':modelo', $this->modelo);
            $sth->bindParam(':color', $this->color);
            $sth->bindParam(':precio', $this->precio);
    
            // Ejecuta la consulta
            $sth->execute();
    
            // Redirige después de la inserción
            header("Location: ../coches.php");
            return true;
        } catch (Exception $e) {
            // Muestra el mensaje de error
            echo "Surgió un error en createCoches: {$e->getMessage()}";
        }
    }
    

    public function updateCoches()
    {
        try {
            $db = Conexion::Connect();
            // Preparar la sentencia SQL usando placeholders
            $sth = $db->prepare("UPDATE coches SET matricula = :matricula, marca = :marca, modelo = :modelo, color = :color, precio = :precio WHERE idcoche = :id");
    
            // Asignar los valores a los placeholders
            $sth->bindParam(':matricula', $this->matricula, PDO::PARAM_STR);
            $sth->bindParam(':marca', $this->marca, PDO::PARAM_STR);
            $sth->bindParam(':modelo', $this->modelo, PDO::PARAM_STR);
            $sth->bindParam(':color', $this->color, PDO::PARAM_STR);
            $sth->bindParam(':precio', $this->precio, PDO::PARAM_INT);
            $sth->bindParam(':id', $this->id, PDO::PARAM_INT);
    
            // Ejecutar la consulta
            $sth->execute();
            header("Location: ../coches.php");
        } catch (Exception $e) {
            echo "Surgió un error en updateCoches({$e->getMessage()})";
        }
    }
    
    
    public static function FindId($id)
    {
        $cocheEncontrado=array();

        try{
            $db=Conexion::Connect();
            $sth=$db->query("SELECT * FROM coches WHERE idcoche={$id}");
            $cocheEncontrado=$sth->fetchAll();
            return $cocheEncontrado[0];
        }catch(Exception $e){
            echo "surgió un error en FindId({$e->getMessage()})";
        }

    }

    public static function deleteCoches($id)
    {
        try{
            $db=Conexion::Connect();
            $sth=$db->query("DELETE FROM coches WHERE idcoche={$id}");
            header("Location: ../coches.php");
            return true;
        }catch(Exception $e){
            echo "surgió un error en deleteCoches({$e->getMessage()})";
            var_dump($id);
        }
    }
}
?>