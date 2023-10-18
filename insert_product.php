<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];

    $sql = "INSERT INTO products (name, price) VALUES ('$productName', $productPrice)";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
    } else {
        echo "Error adding product: " . $conn->error;
    }
}

$conn->close();
?>
