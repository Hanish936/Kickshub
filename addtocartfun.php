<?php
session_start();

if (isset($_GET['id'])) {
    if (isset($_GET['quantity'])) {
        $quantity = $_GET['quantity'];
    } else {
        $quantity = 1;
    }
    $id = $_GET['id'];

    // Update cart with the selected product and quantity
    $_SESSION['cart'][$id] = array('quantity' => $quantity);
    header('location:addtocart.php'); // Redirect to the cart page
    exit();
}
?>
