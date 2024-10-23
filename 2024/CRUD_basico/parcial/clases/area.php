<?php 
require_once 'conexion.php';

class Area
{
    private $user_id;
    //private $nombreArea;

    private $task_name;
    private $area_id;
    private $description;
    private $start_date;
    private $end_date;
    private $priority;
    private $state;

public function __construct($task_name,$description,$start_date,$end_date,$priority,$state,$area_id=0,$user_id=0)
{
    $this->task_name=$task_name;
    $this->description=$description;
    $this->start_date=$start_date;
    $this->end_date=$end_date;
    $this->priority=$priority;
    $this->state=$state;
    $this->area_id=$area_id;
    $this->user_id=$user_id;
}

public static function getAll()
{
    $array=array();

    $con=Conexion::conex();
    $sql=$con->query("SELECT * FROM areas");
   $array=$sql->fetchAll(PDO::FETCH_OBJ);
   //var_dump($array);
    return $array;
}

public function update()
{
    $con=Conexion::Conex();
    $sql=$con->query("UPDATE tasks SET task_name = '{$this->task_name}' , description = '{$this->description}' , start_date = CURDATE( ), end_date = CURDATE(), area_id = '{$this->area_id}', 'user_id = '{$this->user_id}', priority = priority, status = ' inconclusive' WHERE task_id= ?;");
}
}
?>