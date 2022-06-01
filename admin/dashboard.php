<?php
include('header.php');

if (!isset($_SESSION['email'])) {
	header("Location : start.php");
}else{


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/903005c18e.js" crossorigin="anonymous"></script>
  <style type="text/css">
 *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
 }
footer*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
 body{
  background-color: #ccc;
 } 
 .footer-cols ul li a:hover{
         color: #ffffff;
         padding: 8px;
       }
       .footer-cols .social-link a{
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255,255,255,0.2);
        margin:0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: darkorange;
        transition: all 0.5s ease;


       }
        .footer-cols .social-link a:hover{
          color: #24262b;
          background: #ffffff;


        }   
  .row6s{
     display: flex;
     height: 88%;
     align-items: center;
    }
    .col5{
      flex-basis: 50%;
    }

     .col5 .card3 {
      width:300px ;
      height: 330px;
      display:flex;
      border-radius: 10px;
      padding: 15px 25px;
      box-sizing: border-box;
      cursor: pointer;
      margin: 12px 15px;
      background-position: center;
      background-size: cover;
      transition: transform 0.5s;


    }
      .card12{
      background-image: url(upload/sunset.png);
    }
      .card11{
      background-image: url(upload/lagos.jpg);
    }

  </style>
</head>
<body>


<div>
<h2 style="color:white;">Welcome	<?php echo $_SESSION['fullname'] ?> </h2>
</div>


<br>
<br>


<div class="container">
	<div>
	
</div>
</div>
<br>

<br>
<br>
<br>

<div class="">
  <div>
   <div style="text-align:center;" class="container"> <h3>About Us</h3></div>
    <h1 style="text-align:center;">Life Is Short and the World is Wide, Travel</h1>
    <p style="margin-left: 6px;margin-right: 6px;letter-spacing: 2px;line-height: 1.5rem;">The Planet Lifestyle and Travels is for the adventurer, the wanderlust, the explorer we love helping people have new experiences and seeing the beauty of travelling.We are really excited to offer you interesting travel experiences, useful travel and lifestyle tips from my various fields of experience, and much more. We hope you enjoy them to the fullest. 

Here you’ll get involved and we’ll go on unforgettable adventures together. Would be doing this, not only through writing but unique photography to show you the world in the most real, fun and humorous way.

It’s a big world out there, let’s see it together.</p>
<br>
<br>
<br>
<br>
<br>
<br>
 <div style="text-align:center;" class="footer-cols">
    <h4>Follow Us</h4>
    <div  class="social-link">
      <a href=""><i class="fa-brands fa-facebook-square"></i></a>
    <a href=""><i class="fa-brands fa-twitter-square"></i></a>
      <a href=""><i class="fa-brands fa-instagram-square"></i></a>
      <a href=""><i class="fa-brands fa-linkedin"></i></a>
    </div>
  </div>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="upload/lagos.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/morocco.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/market.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/egypt.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/coast.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/h10.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/estepona.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/beach.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>


<div  style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(upload/stone.jpg);background-repeat: no-repeat; background-attachment: fixed;background-size: cover; color: #f07900;text-align: center;padding: 25%;">

  <div>
    <div class="container">
<div class="row">
    <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
      <div class="" style="width: 28rem;height: 18rem;">
  
  <div style="color: black;" class="">
    <h3 style="font-weight: bold; margin-top: 30px;font-size: 40px;letter-spacing: 2px;color: #ccc;" class=> Services</h3>
    <hr>
    <h5 style="color: #ccc;" class="card-text">Travel Content and Help</h5>
    <p style="line-height:1.5rem;font-weight: bold;font-size: 18px;letter-spacing: 2px;color: #ccc;">From Twitter to Youtube ,all through Instagram and Linkden,get the best lifestyle and travel contents.Want a feature?Reach Out. </p>
    <div>
      <hr>
     <h3 style="color: #ccc;">Travel Enquiries</h3>
    </div>
    <p style="font-weight:bold;color: #ccc;">Thinking about exploring or visiting new places?Reach out to get advice and the information you need.</p>
  </div>
  <hr style="color:black">
   <ul style="list-style: none;">
    <li><i class="fa-solid fa-phone"></i>(+234) 811 288 33</li> 
     <li><i class="fa-solid fa-phone"></i>(+1) 444 332 22</li>
     <li><i class="fa-solid fa-envelope"></i>info@planettoursandtravel.com</li> 
    <li><i class="fa-solid fa-location-dot"></i>Lagos,Nigeria</li>
  </ul> 
  
</div>
      
    </div>
    <br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

 <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
     
  <div class="">
    <?php echo "<span style='color: red; font-weight: bolder;'>" . @$msg. "</span>"; ?>

   
   <form method="post" action="contact.php">
    <label style="font-weight:bolder;">Your Name</label>
    <br>
    <input style="width:200%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA;" type="text" name="name" required>
    <br>
    <br>
    <label style="font-weight:bolder;">Email</label>
    <br>
    <input style="width:200%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA;" type="email" name="email" required>
    <br>
    <br>
    <label style="font-weight:bolder;">Subject</label>
    <br>
    <input style="width:200%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA;" type="text" name="subject" required>
    <br>
    <br>
    <label style="font-weight:bolder;">Your Messages</label>
    <br>
    <textarea style="border-radius: 5px;outline: none;background-color: #FAFAFA;" rows="10" cols="50" name="message"></textarea>
    <br>
    <br>
    <button name="submit" style="font-weight:bolder;border: 5px;background-color: orange;color: white;width: 80%;border-radius: 10px;height: 40px;">Send message</button>
    
   </form>
  </div>
  <!-- <ul class="list-group list-group-flush"> -->
    <!-- <li class="list-group-item">Cras justo odio</li> -->
    <!-- <li class="list-group-item">Dapibus ac facilisis in</li> -->
    <!-- <li class="list-group-item">Vestibulum at eros</li> -->
  <!-- </ul> -->
 

</div>

</div>
</div>

  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <div>
    <h5 style="text-align:center;">Discover</h5>
    <h2 style="text-align:center;">Explore My Stories</h2>
    <div class="row6">
      <div class="col5">
      
     </div>
     <?php
       include ('db.php');
     $query = "SELECT * FROM articles";
    $result = mysqli_query($con, $query);
    while($arr = mysqli_fetch_assoc($result)){
      $id = $arr['id'];
      $filename = $arr['filename'];
      $title = $arr['title'];
      $content = $arr['content'];

      $partcontent = substr($content, 0, 300);
        echo "

            <div>
    <img src='upload/$filename'>
    <br>
    <h2>$title</h2>

    <br>
    <a class='a2'  style='text-align:left;' href='comments.php'>Leave a comment/by Planet</a>
    <p>$partcontent</p>
    <br>

    <a class='btn btn-primary' href='articles.php?id=$id'>Read More &rarr;</a>
    
            
  </div>
      <br>
      ";
    }

     ?>
    
<div>
  <div style="background-color:black;padding: 30px;color: white;display: flex;"><h2>Get your  travel guide and travel pictures, discounted now</h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button style="background-color: darkorange;border-radius: 20px;"><a style="color: white;" href="contact.php">LEARN MORE</a></button></div>
</div>


</div>
<br>
<br>
<br>
<br>
<br>
<br>







 </div>
    
   



<?php include('footer.php');
} ?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>