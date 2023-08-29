<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'shoppingcart');

if (!$con) {
    echo "Connection unsuccessful";
    exit;
}

$product_id = (isset($_GET['id']) && is_numeric($_GET['id'])) ? $_GET['id'] : null;

// Fetch product details from the database
$query = "SELECT * FROM `productdetail` WHERE Id = $product_id";
$queryfire = mysqli_query($con, $query);
$product = mysqli_fetch_array($queryfire);
?>

<!-- Rest of your HTML code here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title>Kickshub</title>
    
    <link rel="stylesheet" href="detailcss.php">
</head>
<body>
<section id="header">
      <a href="#"><img src="Image/logo.png" class="logo" alt=""></a>
      <div>
         <ul id="navbar">
            <li><a  href="Index.html">Home</a></li>
            <li><a class="active"href="shop.html">Shop</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="Cart.html"><i class="far fa-shopping-bag"></i></a></li>
         </ul>
      </div>
   </section>
           <section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="<?php echo $product['Image'];?>" width="100%" id="MainImg" alt="">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="<?php echo $product['Image'];?>" width="100%" class="smallimg" alt="">
            </div>
            <div class="small-img-col">
                <img src="<?php echo $product['Image'];?>" width="100%" class="smallimg" alt="">
            </div>
            <div class="small-img-col">
                <img src="<?php echo $product['Image'];?>" width="100%" class="smallimg" alt="">
            </div>
            <div class="small-img-col">
                <img src="<?php echo $product['Image'];?>" width="100%" class="smallimg" alt="">
            </div>
        </div>
    </div>
    <div class="single-pro-details">
        <h6>Homes/shop</h6>
        <?php echo $product_id;?>
        <h4><?php echo $product['Name'];?></h4>
        <h2><?php echo $product['Price'];?></h2>
        <select name="" id="">
            <option>Select Size</option>
            <option>UK 7</option>
            <option>UK 8</option>
            <option>UK 9</option>
            <option>UK 10</option>
        </select>
       
        <form action='addtocartfun.php' >
    <input type="hidden"  name='id' value='<?php echo $product_id;?>'>
        <input type="number" value='1' name='quantity'>
        <a > <button class="normal" type="submit">Add To Cart</button></a>
        </form>
        <h4>Product details</h4>
        <span><?php echo $product['detail'];?></span>
    </div>
    
   </section>
      
          <?php
     ?>
     
      </body>
</html>