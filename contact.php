<?php
include('header.php');

// if (!isset($_SESSION['email'])) {
// 	header("Location : start.php");
// }else{


?>
<?php
include('db.php');
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	if (empty($name) or empty($email) or empty($subject) or empty($message)) {
		$msg = "All fields are required!";
	}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	    $msg = "Invalid Email Format";
	}else{
		$query = "INSERT INTO reply (name,email,subject,message) VALUES('$name','$email','$subject','$message')";
		$result = mysqli_query($con,$query);

		 if ($result) {
		 	header("refresh:0; url = contact.php");
		 	echo "<script> alert('Message sent Successfully,we will give a feedback soon.')</script>";
		 }else{
		 	header("refresh:0; url = contact.php");
		 	echo "<script> alert('Error,try again later')</script>";
		 }
	}
	}
		

	





?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<script src="https://kit.fontawesome.com/903005c18e.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
<div class="row">
    <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
      <div class="" style="width: 28rem;height: 18rem;">
  
  <div style="color: black;" class="">
    <h3 style="font-weight: bolder; margin-top: 30px;font-size: 40px;letter-spacing: 2px;" class=> Contact Us</h3>
    <br>
    <h5 class="card-text">Travel somewhere new for 5 minutes everyday.</h5>
    <p style="line-height:1.5rem;font-weight: bolder;font-size: 18px;letter-spacing: 2px;">Need a tour guide?want advise on where to go for your honeymoon,work vacation,holidays?</p>
    <div>
    	<p>The Services Planet Offers:</p>
    	<ul>
    		<li>Tour Guide</li>
    		<li>Travel Guide & Advice</li>
    		<li>Accomodation</li>

    	</ul>
    </div>
    <p style="font-weight:bold;">All this services will be provided with just a token fee.We are relaible and ready to serve to perfection. Simply Send a message to us,we will respond as soon as possible.Looking Forward to hear from you.</p>
  </div>
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
   	<input style="width:100%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA;" type="text" name="name" required>
   	<br>
   	<br>
   	<label style="font-weight:bolder;">Email</label>
   	<br>
   	<input style="width:100%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA;" type="email" name="email" required>
   	<br>
   	<br>
   	<label style="font-weight:bolder;">Subject</label>
   	<br>
   	<input style="width:100%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA;" type="text" name="subject" required>
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

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

























<?php include('footer.php');
 ?>
</body>
</html>