<?php 
require_once 'conexion.php';
class Tareas{
    private $user_id;
    //private $nombreArea;
    private $task_id;
    private $task_name;
    private $area_id;
    private $area_name;
    private $description;
    private $start_date;
    private $end_date;
    private $priority;
    private $state;

public function __construct($task_name,$area_name,$start_date,$end_date,$priority,$state,$area_id=0,$user_id=0,$task_id=0,$description="")
{
    $this->task_name=$task_name;
    $this->description=$description;
    $this->start_date=$start_date;
    $this->end_date=$end_date;
    $this->priority=$priority;
    $this->state=$state;
    $this->area_id=$area_id;
    $this->area_name=$area_name;
    $this->user_id=$user_id;
    $this->task_id=$task_id;
}
    public static function getAll()
    {
        $vec=array();
        $con=Conexion::Conex();
        $sql=$con->query("SELECT T.task_id,A.area_name, T.task_name, T.start_date, T.end_date,
        T.priority, T.status FROM areas A INNER JOIN tasks T ON T.area_id = A.area_id;");
        $vec=$sql->fetchAll(PDO::FETCH_OBJ);
        return $vec;
    }
    public function crear()
    {
        $con=Conexion::Conex();
        $sql=$con->query("INSERT INTO tasks (task_name, description, start_date, end_date,area_id, user_id, priority, status) 
        VALUES                            ('{$this->task_name}' , '{$this->description}' ,'{$this->start_date}', '{$this->end_date}', '{$this->area_id}','{$this->user_id}','{$this->priority}', '{$this->state}');");
        return $sql;
    }
    public static function getAllUsers()
    {
        $con=Conexion::Conex();
        $sql=$con->query("SELECT T.task_id, A.area_name, T.task_name, T.start_date, T.end_date,
            T.priori ty, T.status FROM areas A INNER JOIN tasks T ON T.area_id = A.area_id WHERE T.user_id = ?;");
        $todo=$sql->fetchAll();
        return $todo;
    }

    public function actualizar($task_id)
    {
        $con=Conexion::Conex();
        $sql=$con->query("UPDATE tasks SET task_name = '{$this->task_name}' , description = '{$this->description}' ,
        start_date = CURDATE( ), end_date = CURDATE(), area_id = '{$this->area_id}',
            user_id = '{$this->user_id}', priority ='{$this->priority}', status = ' {$this->state}' WHERE task_id= '{$this->task_id}';");
        return $sql;
    }

    public static function getByUser($user_id)
    {   $todo=array();
        $con=Conexion::Conex();
        $sql=$con->query("SELECT T.task_id, A.area_name, T.task_name, T.start_date, T.end_date,
        T.priority, T.status FROM areas A INNER JOIN tasks T ON T.area_id = A.area_id WHERE T.user_id = '{$user_id}';");
        $todo=$sql->fetchAll(PDO::FETCH_OBJ);
        return $todo;
    }
}
?>