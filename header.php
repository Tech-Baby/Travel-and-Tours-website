<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
    .container1{
      width: 100%;
      height: 100vh;
      background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(upload/Clouds.jpg) ;
      background-position: center;
      background-size: cover;
      padding-left: 8%;
      padding-right: 8%;
      box-sizing: border-box;
    }
    .navbar{
      height: 12%;
      display: flex;
      align-items: center;
    }
    .logo{
      width: 50px;
      cursor: pointer;
    }
    .menu-icon{
      width: 30px;
      cursor: pointer;
      margin-left: 80px;

    }
    nav{
      flex: 1;
      text-align: right;
    }
    nav ul li {
      list-style: none;
      display: inline-block;
      margin-left: 80px;
    }
    nav ul li a{
      text-decoration: none;
      color: #fff;
      font-size: 13px;
    }
  .row{
     display: flex;
     height: 88%;
     align-items: center;
    }
    .col{
      flex-basis: 50%;
    }
    .h12{
     color: #fff; 
     font-size: 100px;

    }
  .col  p{
      color: #fff;
      font-size: 11px;
      line-height:15px ;
    }
    button{
      width: 180px;
      color: #000;
      font-size: 12px;
      padding: 12px 0;
      background: #fff;
      border: 0;
      border-radius: 30px;
      outline: none;
      margin-top: 30px;

    }
   .col .card {
   
      width:200px ;
      height: 230px;
       display: inline-block;
      border-radius: 10px;
      padding: 15px 25px;
      box-sizing: border-box;
      cursor: pointer;
      margin: 18px 18px;
      background-position: center;
      background-size: cover;
      transition: transform 0.5s;


    }
    .card1{
      background-image: url(upload/capetown.jpg);
    }
    .card2{
      background-image: url(upload/coast.jpg);
    }
    .card3{
      background-image: url(upload/pyramide.jpg);
    }
    .card4{
      background-image: url(upload/zambia.jpg);
    }
    .card:hover{
      transform: translateY(-10px);
    }
    h5{
    color: #fff;  
    text-shadow:0 0 5px #999 ;
    }
    .card1 .card2 .card3 .card4 p{
      text-shadow:0 0 15px #000;
      font-size:8px ;
    }
     @media screen and (max-width: 600px){
      
      .h12{
        font-size: 56px;
        margin-top: 75%;
        text-align: center;
        margin-left: -30px;

      }
       nav{
        display: block;
        margin-right: -40px;
       }
    
      .menu-icon{
      visibility: hidden;

    }
     .logo{
      width: 40px;
      cursor: pointer;
      margin-top: -40px;
      margin-left: -50px;
    }
    .col .card {
   
    visibility: hidden;
      

    }
     nav ul li {
      list-style: none;
      display: block;
      margin-left: 60px;
    }
    .ola{
      text-align: center;
      margin-left: -40px;
      margin-top: 100px;
    }
    button{
      margin-top: 70%;
    }
    }

      

            

  </style>
  
</head>
<body>
<div class="container1">
  <div class="navbar">
    <img src="Upload/logo.jpg" class="logo">
    <nav>
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="short.php">BLOG</a></li>
        <li><a href="travel.php">JOURNEY</a></li>
        <li><a href="gallery.php">GALLERY</a></li>

      </ul>
    </nav>
    <img src="upload/me.png" class="menu-icon">
  </div>
  <div class="row">
    <div class="col">
      <h1 class="h12">Planet</h1>
       <p class="ola">At Planet,Our mission is to foster tourism and display the beauty of Africa and guide you for tours</p>
       <button style="border-radius:30px;" type="button">Explore</button>
    </div>
    <div class="col">
     <div class="card card1">
       <h5 style="color: white;">Cape Town</h5>
       <p>At Planet,Our mission is to foster tourism and display the beauty of Africa and guide you for tours</p>
       
     </div>
     <div class="card card2">
       <h5 style="color:white;">Zanzibar</h5>
       <p style="text-align:center;">At Planet,Our mission is to foster tourism and display the beauty of Africa and guide you for tours</p>
      
     </div>
     <div class="card card3">
       <h5 style="color:white">Pyramid Of Giza</h5>
       <p>At Planet,Our mission is to foster tourism and display the beauty of Africa and guide you for tours</p>
       
     </div>
     <div class="card card4">
       <h5 style="color:white;">Victoria Falls</h5>
       <p>At Planet,Our mission is to foster tourism and display the beauty of Africa and guide you for tours</p>
      
     </div>
    </div>
  </div>
</div>
</body>
</html>






























