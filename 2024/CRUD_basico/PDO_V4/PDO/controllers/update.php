<?php
require '../classes/product.php';

$product_id = $_POST['product_id'] ?? null;
$product_name = $_POST['product_name'] ?? null;
$price = $_POST['price'] ?? null;
$classification_id = $_POST['classification_id'] ?? null;

if ($product_id === null || $product_name === null || $price === null || $classification_id === null) {
    header("Location: ../list.php?message=false");
    exit(); 
}

$result = Product::Update($product_id, $product_name, $price, $classification_id);
header("Location: ../list.php?message=".$result);
?>
