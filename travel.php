<?php
include('header.php');

// if (!isset($_SESSION['email'])) {
// 	header("Location : start.php");
// }else{

// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Journey</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/903005c18e.js" crossorigin="anonymous"></script>
      <style type="text/css">
      body{
        line-height: 1.5;
        font-family: sans-serif;
      }

      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      .container2{
        max-width: 1170px;
        margin: auto;
      }
       .row{
        display: flex;
        flex-wrap: wrap;
       }
      ul{
        list-style: none;
      }
      .footer{
        background-color: #24262b;
        padding: 70px 0;
      }
      .footer-col{
        width: 25%;
        padding: 0 15px;
      }
      .footer-col h4{
        font-size: 18px;
        color: #ffffff;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;

      }
      .footer-col h4::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color:orange ;
        height:2px ;
        box-sizing: border-box;
        width: 50px;
      }
      .footer-col ul li:not(:last-child) {
        margin-bottom: 10px;
      }
      .footer-col ul li a{
       font-size: 16px;
       text-transform: capitalize;
       color: #ffffff;
       text-decoration: none;
       font-weight: 300;
       color: #bbbbbb;
       display: block;
       transition: all 0.3s ease;
      }
       .footer-col ul li a:hover{
         color: #ffffff;
         padding: 8px;
       }
       .footer-col .social-links a{
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255,255,255,0.2);
        margin:0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;


       }
        .footer-col .social-links a:hover{
          color: #24262b;
          background: #ffffff;


        }
        @media(max-width: 767px){
          .footer-col{
            width: 50px;
            margin-bottom: 30px;

          }
        }
         @media(max-width: 574px){
          .footer-col{
            width: 100%;

            

          }
        }
    </style>
</head>
<body>
<div class="container">
    <div><h1 style="text-align:center;font-weight: 600;font-size: 90px;">JOURNEY</h1></div>
   <br>
   <br>

<?php
        include('db.php');

        $query = "SELECT * FROM journey";
        $result = mysqli_query($con, $query);
        while($arr = mysqli_fetch_assoc($result)){
            $id = $arr['id'];
            $filename = $arr['filename'];
            $title = $arr['title'];
            $content = $arr['content'];

          

            echo "

                        <div class = ''>
        <img src='upload/$filename'>
        <br>
        <h2>$title</h2>

        <br>
       
        <p style='text-align:justify;line-height:1.5rem;'>$content</p>
        <br>

       
            
    </div>
      <br>
            ";
        }

    ?>

<br>
<br>

</div>

<footer class="footer">
  <div class="container2">
    
<div class="row">
    <div class="footer-col">
    <h4>Explore</h4>
    <ul>
      <li><a href="journey.php">Journey</a></li>
      <li><a href="places.php">Places</a></li>
      <li><a href="contact.php">Our Services</a></li>
      <li><a href="gallery.php">Gallery</a></li>
    </ul>
    
  </div>
    <div class="footer-col">
    <h4>About</h4>
    <ul>
      <li><a href="">Our Story</a></li>
      <li><a href="">Team</a></li>
      <li><a href="">Privacy Policy</a></li>
      <li><a href="">FAQ</a></li>
    </ul>
    
  </div>
    <div class="footer-col">
    <h4>Contact Info</h4>
    <ul>
      <li><a href=""><i class="fa-solid fa-phone"></i>(+234) 811 288 33</a></li>
      <li><a href=""><i class="fa-solid fa-phone"></i>(+1) 444 332 22</a></li>
      <li><a href=""><i class="fa-solid fa-envelope"></i>info@planettoursandtravel.com</a></li>
      <li><a href=""><i class="fa-solid fa-location-dot"></i>Ibrahim Taiwo Road,Ilorin ,Kwara State.</a></li>
    </ul>
    
  </div>
  <div class="footer-col">
    <h4>Follow Us</h4>
    <div class="social-links">
      <a href=""><i class="fa-brands fa-facebook-square"></i></a>
    <a href=""><i class="fa-brands fa-twitter-square"></i></a>
      <a href=""><i class="fa-brands fa-instagram-square"></i></a>
      <a href=""><i class="fa-brands fa-linkedin"></i></a>
    </div>
  </div>

</div>



  </div>
  
</footer>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>

