<?php 
require_once "Conexion.php";
class Movies{

    private $id;
    private $tittle;
    private $director;
    private $release_year;
    private $genre;
    private $synopsis;
    private $main_actors;
    private $rating;
    private $user_id_update;
    private $enable;

    public function __construct($tittle,$director,$release_year,$genre,$synopsis,$main_actors,$rating,$user_id_update,$id=0, $enable=0)
    {
        $this->tittle=$tittle;
        $this->director=$director;
        $this->release_year=$release_year;
        $this->genre=$genre;
        $this->synopsis=$synopsis;
        $this->main_actors=$main_actors;
        $this->rating=$rating;
        $this->user_id_update=$user_id_update;
        $this->id=$id;
        $this->enable=$enable;
    }
    public function getAll()
    {
        $con=Conexion::Con();
        $Q=$con->query("SELECT * FROM movies ORDER BY id;"); 
        $x=$Q->fetchAll(PDO::FETCH_OBJ);
        return $x ;
    }
    public function getById()
    {
        try{
            $con=Conexion::Con();
            $Q=$con->query("SELECT * FROM movies WHERE id = {$this->id};");
            $x=$Q->fetchAll(PDO::FETCH_OBJ);
            return $x;
        }catch(Exception $e){
            $mensaje="ERROR EN EL METODO getById".$e->getMessage();
            return $mensaje;
        }

    }

    public function Create()
    {
        try{
        $con=Conexion::Con();
        $Q=$con->query("INSERT INTO movies (title, director, release_year, genre, synopsis, main_actors, rating, user_id_update) 
        VALUES ('{$this->tittle}', '{$this->director}', {$this->release_year}, '{$this->genre}', '{$this->synopsis}', '{$this->main_actors}', {$this->rating},{$this->user_id_update});");
        $mensaje="LOS DATOS SE CARGARON CON EXITO";
        return $mensaje ;
        }catch(Exception $e){
            $mensaje="HUBO UN ERROR AL CARGAR LOS DATOS EN MOVIES".$e->getMessage();
            return $mensaje;
        }
    }

    public function Update()
    {
        try{
            $con=Conexion::Con();
            $Q=$con->query("UPDATE movies SET title = '{$this->tittle}', director = '{$this->director}', release_year = {$this->release_year}, genre = '{$this->genre}', synopsis = '{$this->synopsis}',
             main_actors = '{$this->main_actors}', rating = {$this->rating}, user_id_update = {$this->user_id_update} WHERE id = {$this->id};");
            $mensaje="SE A ACTUALZADO CORRECTAMENTE LA PELICULA";
            return $mensaje;
        }catch(Exception $e)
        {
            $mensaje="ERROR AL ACTUALIZAR".$e->getMessage();;
        }
    }
    
    public function Delete()
    {
        try{
            $con=Conexion::Con();
            $Q=$con->query("DELETE FROM movies WHERE id = {$this->id};");
            $mensaje="SE A ELIMINADO CORRECTAMENTE LA PELICULA";
            return $mensaje;
        }catch(Exception $e)
        {
            $mensaje="ERROR AL ELIMINAR".$e->getMessage();;
        }
    }

    public function Change()
    {
        try{
            $con=Conexion::Con();
            $Q=$con->query("UPDATE movies SET enabled = IF({$this->enable} = 1, 0, 1) WHERE id = {$this->id};");
            $mensaje="SE A CABIADO EL ESTADO CORRECTAMENTE DE LA PELICULA";
            return $mensaje;
        }catch(Exception $e)
        {
            $mensaje="ERROR EN CHANGE".$e->getMessage();;
        }
    }
}
?>