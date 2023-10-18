<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get product ID from the URL parameter
    $product_id = $_GET['product_id'];

    // Check if the product exists
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Product exists, add it to the user's cart
        $user_id = 1; // Replace with the actual user ID (retrieve from the session)
        $quantity = 1;

        $insertSql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, $quantity)";
        if ($conn->query($insertSql) === TRUE) {
            echo "Product added to cart successfully!";
        } else {
            echo "Error adding product to cart: " . $conn->error;
        }
    } else {
        echo "Product not found!";
    }
}

$conn->close();
?>
