<?php
require_once '../classes/property.class.php';
$newProperty = new Property($_POST['title'], $_POST['description'], $_POST['operation_type'], $_POST['price'], $_POST['currency'], $_POST['bedrooms'], $_POST['square_meters'], $_POST['address'], $_POST['ciudad']);
$newProperty->Crear();

?>