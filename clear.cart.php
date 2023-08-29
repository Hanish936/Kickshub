<?php
session_start();

// Clear the entire session
session_unset();
session_destroy();

// Redirect back to the cart page or any other page you want
header('Location: addtocart.php');
exit();
?>
