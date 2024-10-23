<?php
require_once 'database.php';


Class Student {
private int $id;
private string $last_name;
private string $first_name ;
private int $career_code;

public function __construct($last_name, $first_name, $career_code, $id = 0) {
    $this->id = $id;
    $this->last_name = $last_name;
    $this->first_name = $first_name;
    $this->career_code = $career_code;
}

public function Create() {
    try {    
        $connect = Database::Connect();
        $sth = $connect->query("INSERT INTO students (last_name, first_name, career_code) 
                                VALUES ('{$this->last_name}', '{$this->first_name}', {$this->career_code})");
        return true;
    }catch(Exception $e)
     {
        return false;    
    }
}
public static function getById($id) {
    $findStudent = array();
    try {    
        $connect = Database::Connect();
        $sth = $connect->query("SELECT * FROM students WHERE id = {$id}");
        $findStudent = $sth->fetchAll();
        return $findStudent[0];
    }catch(Exception $e)
     {
        return null;    
    }
}
    public function Update() {
        try {    
            $connect = Database::Connect();
            $sth = $connect->query("UPDATE students SET last_name = '{$this->last_name}', first_name = '{$this->first_name}', career_code = {$this->career_code} WHERE id = {$this->id}");
            return true;
        }catch(Exception $e)
         {
            return false;    
        }
    }

    public static function Delete($id) {
        try {    
            $connect = Database::Connect();
            $sth = $connect->query("DELETE FROM students WHERE id = {$id}");
            return true;
        }catch(Exception $e)
         {
            return false;    
        }
    }

    public static function getAll() {
       
        $cn = Database::Connect();
        $sth = $cn->query("SELECT C.*, S.* FROM careers C INNER JOIN students S ON S.career_code = C.career_code ORDER BY S.last_name");
        $careers = $sth->fetchAll();
        return $careers;

    }
    

}    




?>