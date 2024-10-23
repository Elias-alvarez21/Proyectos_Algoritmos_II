<?php

require_once 'database.php';

class Career {

    public static function getAll() {
       
        $cn = Database::Connect();
        $sth = $cn->query('SELECT * FROM careers ORDER BY career_name');
        $careers = $sth->fetchAll();
        return $careers;

    }
}

?>