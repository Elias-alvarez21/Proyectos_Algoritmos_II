<?php 
require_once  'conexion.php';

class Socios//PARTNERS    
{
    private $id;
    private $surname;
    private $name;
    private $nid;
    private $cumpleaños;
    private $genero;

    public function __construct($surname,$name,$nid,$cumpleaños,$genero,$id=0){ 
        $this->id = $id;
        $this->surname = $surname;
        $this->name = $name;
        $this->nid = $nid;
        $this->cumpleaños = $cumpleaños;
        $this->genero = $genero;       
    }

    public static function getTodo(){ 

        $conexion =Conexion::Connect();
        $sth=$conexion->query("SELECT P.partnerId, CONCAT(P.surname, ' ', P.name) partner, P.NID,
        DATE_FORMAT(P.birthdate, '%d-%m-%Y') birthdate, IF(P.gender = 1, 'M', IF(P.gender = 2, 'F', 'Otro')) gender FROM partners P;");
        $todo=$sth->fetchAll();
        return $todo;
    } 

    public static function TraerActivISELECT (){//ESTA VERGA ES PARA EL SELECT DE MIERDA QUE ESTA EN SEGUNDA VISTA
        $con=Conexion::Connect();
        $sth=$con->query("SELECT CONCAT(A.description, ' - $', A.price) activity FROM activities A 
        INNER JOIN assignments S ON S.activityId = A.activityId WHERE S.cancelled IS NULL AND S.partnerId = 1 ORDER BY A.description ASC;");
        $todos=$sth->fetchAll();
        return $todos;
    }
    
}
?>