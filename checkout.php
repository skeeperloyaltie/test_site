<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the checkout here
    $user_id = 1; // Replace with the actual user ID (retrieve from the session)
    $address = $_POST['address'];

    // You can perform further actions, such as updating order status, creating an order record, etc.
    // For simplicity, let's assume the checkout is successful.
    echo "Checkout successful! Items will be shipped to: $address";
}

$conn->close();
?>
