<!-- Update the user ID retrieval in the Cart and Checkout sections -->
<?php
// Start the session (add this at the beginning of your HTML file)
session_start();
include "db.php";

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Selling</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Add your custom CSS file if needed -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Navigation Bar (You can customize this) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.png" height="80px" width="100px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

            <?php


            // Check if the user is logged in
            if (isset($_SESSION['user_id'])) {
                echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
            } else {
                echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
            }
            ?>
                <li class="nav-item"><a class="nav-link" href="insert_product.html">Insert Products </a></li>
            </ul>
        </div>
        </div>

    </nav>

    <!-- Product Listing Section -->
    <div class="container mt-5">
        <h2>Available Products</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch products from the database
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td><a href='add_to_cart.php?product_id={$row['id']}'>Add to Cart</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Cart Section -->
    <div class="container mt-5">
        <h2>Shopping Cart</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch items in the user's cart
                $user_id = 1; // Replace with the actual user ID (retrieve from the session)
                $sql = "SELECT products.id, products.name, products.price, cart.quantity FROM products
                        JOIN cart ON products.id = cart.product_id
                        WHERE cart.user_id = $user_id";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['quantity']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Checkout Section -->
    <div class="container mt-5">
        <h2>Checkout</h2>
        <form action="checkout.php" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch items in the user's cart
                    $sql = "SELECT products.id, products.name, products.price, cart.quantity FROM products
                        JOIN cart ON products.id = cart.product_id
                        WHERE cart.user_id = $user_id";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['price']}</td>";
                        echo "<td>{$row['quantity']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <div class="form-group">
                <label for="address">Shipping Address:</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Proceed to Checkout</button>
        </form>
    </div>



    <!-- Add Bootstrap JS and Popper.js scripts here -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>