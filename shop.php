<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title>Kickshub</title>
    
    <link rel="stylesheet" href="shopcss.php">
</head>
<body>
   
<section id="header">
      <a href="#"><img src="Image/logo.png" class="logo" alt=""></a>
      <div>
         <ul id="navbar">
            <li><a  href="Index.html">Home</a></li>
            <li><a class="active"href="shop.php">Shop</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="Cart.html"><i class="far fa-shopping-bag"></i></a></li>
         </ul>
      </div>
   </section>
     <?php
       $con =mysqli_connect('localhost','root');
       mysqli_select_db($con,'shoppingcart');
      //  if($con){
      //    echo "connection successfull";
      //  } else{
      //    echo"no connection";
      //  }


      $query =" SELECT 'Id',`Name`, `Image`, `Price`, `Discount` , `i_d` FROM `myshoppingcart` order by Id ASC";
      $queryfire =mysqli_query($con,$query);
      $num = mysqli_num_rows($queryfire);
      if($num>0){
         while($product = mysqli_fetch_array($queryfire)){
            ?>
           
         <div class="pro" onclick="window.location.href=`detail.php?id=<?php echo $product['i_d'];?>`">
         <div><?php echo $product['i_d'];?></div>
              <img src="<?php echo $product['Image'];?>" alt="phone">
                  <div class="des">
                     <span>ADDIDAS</span>
                          <h5><?php echo $product['Name'];?></h5>
                             <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                             </div>
                                  <h4><?php echo $product['Price'];?></h4>
                  </div>
                       <a ><i class="fal fa-shopping-cart cart"></i></a>
        </div>
   
          <?php
         }
      }
     ?>
   </body>

</html>