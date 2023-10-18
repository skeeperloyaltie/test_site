<?php
// ... (existing logout logic) ...

// Start the session
session_start();

// Unset the user ID in the session
unset($_SESSION['user_id']);

// Redirect to the login page or any other page
header("Location: login.php");
exit();
?>
