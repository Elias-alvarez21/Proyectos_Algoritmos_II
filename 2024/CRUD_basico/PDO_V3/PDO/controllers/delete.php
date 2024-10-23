<?php
require '../classes/student.php';
$result = Student::Delete($_POST['id']);
if(isset($result))
header("Location: ../get.php?message=".$result);
?>