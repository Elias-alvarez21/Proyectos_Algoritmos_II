<?php 
require_once "Conexion.php";
class Task{
    private $task_id;
    private $task_name;
    private $description;
    private $start_date;
    private $end_date;
    private $area_id;
    private $priority;
    private $status;
    private $user_id;

    public function __construct( $task_name, $description, $start_date, $end_date, $area_id, $priority, $status,$task_id=0,$user_id=1)
    {
        $this->task_name = $task_name;
        $this->description = $description;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->area_id = $area_id;
        $this->priority = $priority;
        $this->status = $status;
        $this->user_id = $user_id;
        $this->task_id=$task_id;
    }
    
    public static function getAll()
    {
        $todo=Conexion::conectar();
        $x=$todo->query("SELECT T.task_id, A.area_name, T.task_name, T.start_date, T.end_date,T.priority, T.status 
        FROM areas A INNER JOIN tasks T ON T.area_id =A.area_id;");
        $TODO= $x->fetchAll();
        return $TODO;
    }

    public static function getByidTASK($task_id)
    {
        $todo=Conexion::conectar();
        $x=$todo->query("SELECT T.task_id, A.area_name, T.task_name, T.start_date, T.end_date,T.priority, T.status FROM
                      areas A INNER JOIN tasks T ON T.area_id = A.area_id WHERE T.task_id = {$task_id};");
        return $x->fetch();
    }

    public function Create()
    {
        try{
            $con=Conexion::conectar();
            $sth = $con->query("INSERT INTO tasks (task_name, description, start_date, end_date, area_id, user_id, priority, status) VALUES 
            ('{$this->task_name}', '{$this->description}', '{$this->start_date}', '{$this->end_date}', {$this->area_id}, {$this->user_id}, {$this->priority}, '{$this->status}')");

            $mensaje="Se creo correctamente la tarea";
            return $mensaje;
        }catch(PDOException $e)
        {
            $mensaje="hubo un error en el metodo CREAR de la clase TASK".$e->getMessage();
            return $mensaje;
        }
    }
    
    public function Update()
    {
        try{
            $con=Conexion::conectar();
            $sth=$con->query("UPDATE tasks SET   task_name = '{$this->task_name}',description = '{$this->description}',start_date = '{$this->start_date}', end_date = '{$this->end_date}', area_id = {$this->area_id}, 
            user_id = {$this->user_id}, priority = {$this->priority}, status = '{$this->status}' WHERE task_id = {$this->task_id}");
            $mensaje="Se creo actualizo correctamente la tarea";
            return $mensaje;
        }catch(PDOException $e)
        {
            $mensaje="hubo un error en el metodo ACTUALIZAR de la clase TASK".$e->getMessage();
            return $mensaje;
        }
    }

    public static function Delete($task_id)
    {
        try{
            $con=Conexion::conectar();
            $sth=$con->query("DELETE FROM tasks WHERE task_id = {$task_id};");
            $mensaje="Se creo elimino correctamente la tarea";
            return $mensaje;
        }catch(PDOException $e)
        {
            $mensaje="hubo un error en el metodo ELIMINAR de la clase TASK".$e->getMessage();
            return $mensaje;
        }
    }
}
?>