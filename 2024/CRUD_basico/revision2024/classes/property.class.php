<?php
require_once '../database/db.php';

class Property {

    private $title;
    private $description;
    private $operation_type;
    private $price;
    private $currency;
    private $bedrooms;
    private $square_meters;
    private $address;
    private $id_city;
    private $id_user;


    public function __construct($title, $description, $operation_type, $price, $currency, $bedrooms, $square_meters, $address, $id_city) {
        session_start();
        $this->title = $title;
        $this->description = $description;
        $this->operation_type = $operation_type;
        $this->price = $price;
        $this->currency = $currency;
        $this->bedrooms = $bedrooms;
        $this->square_meters = $square_meters;
        $this->address = $address;
        $this->id_city = $id_city;
        $this->id_user = $_SESSION['user-id-active'];
    }

public function Crear() {
    $cn = Database::db();
    $sql = "INSERT INTO properties (title, description, operation_type, price, currency, bedrooms, square_meters, address, id_city, id_user) 
    VALUES ('{$this->title}', '{$this->description}', '{$this->operation_type}', {$this->price}, '{$this->currency}', {$this->bedrooms}, {$this->square_meters}, '{$this->address}', {$this->id_city}, {$this->id_user})";
    echo $sql;
    $cn->query($sql);
    
}

}

?>