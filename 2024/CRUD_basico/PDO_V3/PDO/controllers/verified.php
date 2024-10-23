<?php
require_once '../classes/login.php';
session_start();
 if((isset($_POST['email']) && !empty($_POST['email'])) &&  (isset($_POST['password']) && !empty($_POST['password']))) {
   if(Login::Check($_POST['email'], $_POST['password'])) 
        header("Location: ../get.php");    
      else
       header("Location: ../login.php"); 

    }
?>