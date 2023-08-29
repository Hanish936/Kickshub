<?php
session_start();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    // Remove the selected product from the cart
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
}

// Redirect back to the cart page
header('Location: addtocart.php');
exit();
?>
