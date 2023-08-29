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

#cart1 table{
    width: 100%;
    border-collapse:collapse;
    table-layout:fixed;
    white-space: nowrap;
}
#cart1 table img{
    width: 70px;
}
#cart1 table td:nth-child(1){
    width: 100px;
    text-align: center;
}
#cart1 table td:nth-child(2){
    width: 150px;
    text-align: center;
}
#cart1 table td:nth-child(3){
    width: 250px;
    text-align: center;
}
#cart1 table td:nth-child(4),
#cart1 table td:nth-child(5),
#cart1 table td:nth-child(6){
    width: 150px;
    text-align: center;
}
#cart1 table td:nth-child(5){
    width: 70px;
    padding: 10px 5px 10px 15px;
}
#cart1 table thead{
    border: 1px solid #e2e9e1;
    border-left:none;
    border-right:none;
}
#cart1 table thead td{
    font-weight:700;
    text-transform: uppercase;
    font-size:13px;
    padding:18px 0;
}
#cart1 table thead  tr td{
    padding-top:15px;
}
#cart1 table tbody td{
    font-size:13px;
}
.normal{
    background: #e3e6f3;
    margin-left: 1200px;
    width: 150px;
}