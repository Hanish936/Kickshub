<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" /> <title>Kickshub</title> <link rel="stylesheet" href="addtocartcss.php">
</head>
<body>
    <section id="header">
      <a href="#"><img src="Image/logo.png" class="logo" alt=""></a>
      <div>
         <ul id="navbar">
            <li><a  href="Index.html">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a class="active" href="addtocart.php"><i class="far fa-shopping-bag"></i></a></li>
         </ul>
      </div>
   </section>
    <section id="cart1" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Images</td>
                    <td>Products</td>
                    <td>Price</td>
                    <td>quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'shoppingcart');

                if (!$con) {
                    echo "Connection unsuccessful";
                    exit;
                }
                $total = 0;
                foreach ($cart as $id => $value) {
                  
                    // Fetch product details from the database for each product
                    $query = "SELECT * FROM `productdetail` WHERE Id = '$id'";
                    $queryfire = mysqli_query($con, $query);
                    $product = mysqli_fetch_array($queryfire);

                    // Display the product details and cart items
                    ?>
                    <tr>
                        <td><a href="removeproduct.php?id=<?php echo $id; ?>"><i class="far fa-times-circle"></i></a></td>
                        <td><a href="detail.php?id=<?php echo $product['Id']; ?>"><img src="<?php echo $product['Image']; ?>" alt=""></a></td>
                        <td><a href="detail.php?id=<?php echo $product['Id']; ?>"><?php echo $product['Name']; ?></a></td>
                        <td><?php echo $product['Price']; ?></td>
                        <td><?php echo $value['quantity']; ?></td>
                        <td><?php echo $product['Price'] * $value['quantity']; ?></td>
                        <!-- Inside your HTML code -->
                    </tr> 
                    
                                  
                <?php
                $subtotal = $product['Price'] * $value['quantity'];
                $total += $subtotal;
                }
                
                ?>
                
            </tbody>
            <tr>
            <td colspan="3">Total:</td>
            <td><?php echo $total; ?></td>
           
        </tr>

            <a href="clear.cart.php">Clear Cart</a>
            <a href="order.php"> <button class="normal" type="submit">Buy Now</button></a>
        </table>
        
    </section>

    <!-- Other HTML content here -->
</body>
</html>
