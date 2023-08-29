<?php
   header('Content-type: text/css; charset:UTF-8');
?>
@import url('https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=sawp');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:  Lato,sans-serif;
}

h1{
    font-size: 50px;
    line-height: 64px;
    color: #222;
}

h2{
    font-size: 46px;
    line-height: 54px;

    color: #222;
}

h4{
    font-size: 20px;
    color: #222; 
}

h6{
    font-weight: 700;
    font-size: 12px;
}

p{
    font-size: 16px;
    color: #465b52;
    margin: 15px 0 20px 0;
}

.section-p1 {
    padding: 40px 80px;
}

.section-m1{
    margin: 40px 0;
}

body{
    width: 100% ;
}

/* Header Start */
#header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
    background: #e3e6f3;
    box-shadow: 0 5px 15px rgba(0,0, 0, 0.06);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;
}
#header a img{
    width: 50px;
    height: 50px;

}

#navbar{
    display: flex;
    align-items: center;
    justify-content: center;
}
#navbar li{
    list-style: none;
    padding: 0 20px;
    position: relative;
}

#navbar li a {
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    transition: 0.3s ease;
}

#navbar li a:hover,
#navbar li a.active{
    color: #088178;
}

#navbar li a.active::after,
#navbar li a:hover::after{
    content: "";
    width: 30px;
    height: 2px;
    background: #088178;
    position: absolute;
    bottom: -4px;
    left: 20px;
}

/*Home page */
#page-header{
    background-image: url("Image/banner4.jpg");
    width: 100%;
    height: 100vh;
    background-size: cover;
    display: flex;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    padding: 14px;
}
#page-header h2,
#page-header p{
    color: #fff;
}

 
 .pro{
  
    flex-wrap: wrap;
    text-align: center;
    width: 23%;
    min-width: 250px;
    padding: 20px 15px;
    border: 1px solid #cce7d0;
    border-radius: 25px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
    margin: 15px 10px;
    transition: o.2s ease;
    position: relative;
    display: Inline-grid
}
 .pro:hover{
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);

}
 .pro img{
    width: 100%;
    border-radius: 20px;
    
}
 .pro .des{
    text-align: start;
    padding: 10px 0;
}
 .pro .des span{
    color: #606063;
    font-size: 12px;
}
.pro .des h5{
    padding-top: 7px;
    color: #1a1a1a;
    font-size: 14px;
}
 .pro .des i{
    font-size: 12px;
    color: rgb(243, 181, 25);
}
 .pro .des h4{
    padding-top: 7px;
    font-size: 15px;
    font-weight: 700;
    color: #088178;
}
 .pro .cart{
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50px;
    background-color: #e8f6ea;
    font-weight: 500;
    color: #088178;
    border: 1px solid #cce7d0;
    position: absolute;
    bottom: 20px;
    right: 10px;
}
