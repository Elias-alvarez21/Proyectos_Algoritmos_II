<?php

require_once 'database.php';

class Login {


public static function Check($email, $password) {
   
    $user = array();
    try {    
        $connect = Database::Connect();
        $sth = $connect->query("SELECT id FROM users WHERE email = '{$email}' AND password ='{$password}' LIMIT 1");
        $user = $sth->fetchAll();
        if(isset($user[0]->id)) {
            $_SESSION['loggedIn'] = true;
            return true;
        }
        else 
            return false;
    }catch(Exception $e)
     {
        return null;    
    }

    
 }

 public static function Verify() {
    if(!isset($_SESSION['loggedIn']))      
        header("Location: login.php"); 
 }


}




?>