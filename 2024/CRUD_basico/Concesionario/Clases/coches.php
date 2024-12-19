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
            $sth = $db->prepare("INSERT INTO coches (matricula, marca, modelo, color, precio) VALUES ('$this->matricula','$this->marca','$this->modelo','$this->color,','$this->precio')");
            $sth->execute();
            header("Location: ../coches.php");
            return true;
        } catch (Exception $e) {
            echo "Surgió un error en createCoches: {$e->getMessage()}";
        }
    }
    

    public function updateCoches()
    {
        try {
            $db = Conexion::Connect();
            $sth = $db->prepare("UPDATE coches SET matricula = '$this->matricula', marca = '$this->marca', modelo = '$this->modelo', color = '$this->color', precio = '$this->precio' WHERE idcoche = '$this->id'");
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
            $db->query("DELETE FROM coches WHERE idcoche='$id'");
            header("Location: ../coches.php");
            return true;
        }catch(Exception $e){
            echo "surgió un error en coches::deleteCoches ({$e->getMessage()})";
            var_dump($id);
        }
    }
}
?>