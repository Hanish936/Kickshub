<!-- 


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
   <title>Kickshub</title>
 <link rel="stylesheet" href="ordercss.php">
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
   <div class="form-container">
      <h2 class="form-title">Customer Detail</h2>
      <form action="paymentpage.php" method="post" class="checkout-form" >
         <div class="input-line">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Your name and surname">
         </div>
         <div class="input-line">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter Your Email">
         </div>
         <div class="input-container">
         <div class="input-line">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number">
         </div>
         <div class="input-line">
            <label for="pincode">Pin Code</label>
            <input type="text" name="pincode" id="pincode"placeholder="Enter your pin-code">
         </div>
         </div>
         <div class="input-line">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="Enter your address">
         </div>
        <a href="paymentpage.php"> <input type="submit" value="Complete purchase">
      </form>
   </div>
   </body>
</html>
 -->
 <?php
$con = mysqli_connect('localhost', 'root', '', 'shoppingcart');
if (isset($_POST['submit'])) {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $pincode = $_POST["pincode"];
   $address = $_POST["address"];
   $sql = "INSERT INTO customerdetail (name, email, phone, pincode, address) VALUES ('$name', '$email', '$phone', '$pincode', '$address')";
   $queryfire = mysqli_query($con, $sql);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<title>Kickshub</title>
<link rel="stylesheet" href="ordercss.php">
</head>
<body>
    <section id="header">
      <a href="#"><img src="Image/logo.png" class="logo" alt=""></a>
      <div>
         <ul id="navbar">
            <li><a href="Index.html">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a class="active" href="addtocart.php"><i class="far fa-shopping-bag"></i></a></li>
         </ul>
      </div>
   </section>
   <div class="form-container">
      <h2 class="form-title">Customer Detail</h2>
      <form action="paymentpage.php" method="post" class="checkout-form">
         <div class="input-line">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Your name and surname">
         </div>
         <div class="input-line">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter Your Email">
         </div>
         <div class="input-container">
            <div class="input-line">
               <label for="phone">Phone Number</label>
               <input type="number" name="phone" id="phone" placeholder="Enter your phone number">
            </div>
            <div class="input-line">
               <label for="pincode">Pin Code</label>
               <input type="text" name="pincode" id="pincode" placeholder="Enter your pin-code">
            </div>
         </div>
         <div class="input-line">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="Enter your address">
         </div>
         <a href=""><input type="submit" name="submit" value="Complete purchase"></a>
      </form>
   </div>
</body>
</html>
