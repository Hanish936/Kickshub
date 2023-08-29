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
   
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 0 20%;
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
.menu-container{
    display: flex;
    justify-content: center;
    align-item: center;
    list-style-type: none;
}
.menu-item{
    margin: 2rem;
    cursor: pointer;
    font-weight: 600;
}
.red{
    color: rgb(167,33,10);
}
.menu-icons-container{
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.icon{
    filter: invert(1);
    height: 25%;
    margin: 1rem;
}
.progress-checkout-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 60%;
}

.progress-step-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.step-check{
    background-color: rgb(0, 132, 255);
    height: 30px;
    width: 30px;
    border-radius: 30px;
    margin-bottom: 1rem;
    position: relative;
    background-image: url(Resources/check.svg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 60%;
}

.progress-step-container:nth-of-type(3) .step-check::after{
    display: none;
}
.progress-step-container:nth-of-type(3) .step-check{
    background-image: none;
    background-color: white;
    border: 2px solid grey;
}

.progress-step-container:nth-of-type(2) .step-check::after{
    background-color: grey;
}

.progress-step-container:nth-of-type(2) .step-check{
    background-image: none;
    background-color: white;
    border: 2px solid rgb(0, 132, 255);
}

.step-check::after{
    content: "";
    width: 15vw;
    height: 2px;
    background-color: inherit;
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateX(100%) translateY(-50%);
}

.step-title{
    color: grey;
}

.form-container{
    width: 60%;
    margin-top: 6rem;
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-direction: column;
}

.form-title{
    font-size: 36px;
    margin-bottom: 2.5rem;
    font-weight: 500;
    opacity: 0.8;
}

.checkout-form{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    width: 100%;
}

.input-line{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    margin-bottom: 2rem;
    width: 100%;
}

label{
    font-size: 16px;
    color: grey;
    margin-bottom: 0.5rem;
}

input[type="text"]{
    width: 100%;
    height: 40px;
    padding: 0 10px;
    background-color: #f2f2f2;
    border-radius: 5px;
    border: none;
    font-size: 18px;
}

input[type="text"]::placeholder{
    font-size: 14px;
    color: #b9b9b9;
}

.input-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.input-container .input-line{
    width: 48%;
}

input[type="button"]{
    background-color: rgb(0, 132, 255);
    color: white;
    font-weight: 500;
    font-size: 18px;
    height: 50px;
    padding: 0 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="button"]:hover{
    background-color: rgb(4, 88, 167);
}