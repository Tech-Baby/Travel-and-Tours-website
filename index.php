 <?php
include ('db.php');
if (isset($_POST['submit'])){
	$fname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$country = $_POST['country'];
	$mobile = $_POST['mobile'];


 if (empty($fname) or empty($email) or empty($password) or empty($cpassword) or empty($country) or empty($mobile)) {
			$msg = "All fields are requried";
	
	}elseif(strlen($password) < 6){
		$msg = "Password is too short!";
	}elseif ($password != $cpassword){
       $msg = "Password Mismatched!";
	}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$msg = "Invalid Email Format";
	}else
	$query = "INSERT INTO user (fullname,email,password,country,mobile) VALUES('$fname','$email','$password','$country','$mobile')";
	$result = mysqli_query($con,$query);
	if ($result) {
		header("refresh:0; url = start.php");
		echo"<script>alert('Registration Successful')</script>";
	}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		box-sizing: border-box;
	}
	body{
		height: 150vh;
		display: flex;
		align-items: center;
		justify-content: center;
		background-color: #ccc;
	}
	.container{
		position: relative;
		max-width: 430px;
		width: 100%;
		background: #fff;
		border-radius: 10px ;
		box-shadow: 0 5px 10px rgba(0, 0, 0,0.1);
	}
	.container .form{
		padding: 30px;
	}
	.container .form .title{
		position: relative;
		font-size: 27px;
		font-weight: 600;
	}
	.form .title::before{
		content: '';
		position: absolute;
		left: 0;
		bottom: 0;
		height: 3px;
		width: 30px;
		background-color: #FF9001;
		border-radius: 25px;
	}
	.form .text-field{
		position: relative;
		margin-top: 30px;
		width: 100%;
		height: 50px;
	}
	.text-field input{
		position: absolute ;
		height: 100%;
		width: 100%;
		padding: 0 35px;
		border: none;
		outline: none;
		font-size: 16px;
		border-bottom: 2px solid black;
		border-top: 2px solid transparent ;
		 
	}
	.text-field input :is(:focus, :valid){
		border-bottom-color:#FF9001   ;
	}
	.text-field i{
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		color: #999;
		font-size: 23px;
		transition: all 0.1s ease;


	}
	.text-field input :is(:focus,:valid) ~ i{
		color: #FF9001 ;
	}
	.text-field i.icon{
		left: 0;

	}.text-field i.showHide{
		right: 0;


	 }
	 .form .checkbox{
	 	display: flex;
	 	align-items: center;
	 	justify-content: space-between;
	 	margin-top: 20px;
	 }
	 .checkbox .checkbox-content{
	 	display: flex;
	 	align-items: center;
	 }
	 .checkbox-content input{
        margin:0 8px -2px 4px ;
	 	accent-color: #FF9001;
	 }
	 . form.text{
	 	color:#FF9001 ;
	 	text-decoration:none ;
	 }
	 .form a{
	 	text-decoration: none;


	 }
	 .form a:hover{
	 	text-decoration: underline;
	 }
	 .form .submit{
	 	margin-top: 35px;
	 }
	 .form .submit input{
	 	border: none;
	 	color: #fff;
	 	font-size: 16px;
	 	font-weight: 500;
	 	letter-spacing: 1px;
	 	border-radius: 6px;
	 	background-color: #FF9001;
	 	cursor: pointer;
	 	transition: all 0.3s ease;

	 }
	 .submit input:hover{
	 	background-color: #FF9001;
	 }
	 .form .login-signup{
	 	margin-top: 30px;
	 	text-align: center  ;
	 }
</style>
</head>
<body  style="background-color: #2c3e50;">


<!-- http request => get, post, pacth, delete, push etc.  -->

<div class="container">
	<div class="forms">
		<div class="form">
			<span class="title">Register</span>
			<?php echo "<span style='color: red; font-weight: bolder;'>" . @$msg. "</span>"; ?>

			<form action="index.php" method="post">
				<div class="text-field">
					<input type="text" name="fullname" placeholder="Fullname"><i class="fa fa-user icon"></i>
					
				</div>
				<div class="text-field">
					<input type="email" name="email" placeholder="E-mail"><i class="fa fa-envelope  icon"></i>
					
				</div>
				<div class="text-field">
					<select class="text-field" name="country" id="country" onchange="country_code()">
						<option value="select country">Select Country</option>
						<option value="US">US</option>
						<option value="UK">UK</option>
						<option value="Br">Brazil</option>
						<option value="nig">Nigeria</option>
						
					</select>
					
				</div>
				<div class="text-field"><input class="text-field" type="tel" name="mobile" placeholder="Phone Number" id="output"><i style="margin-top:30px;" class="fa fa-phone  icon"></i>
				</div>
                 
				<div class="text-field">
					<input type="password" class=" " name="password" placeholder="Password"><i class="fa fa-lock  icon"></i>
					
				</div>
				

				<div class="text-field">
					<input type="password" class="password" name="cpassword" placeholder="Confirm Password"><i class="fa fa-lock  icon"></i>
					<i class="fa fa-eye-slash   showHide"></i>
				</div>
                <div class="checkbox">
                	<div class="checkbox-content">
                		<input type="checkbox" name="" id="logCheck">
                		<label for="logCheck" class="text">Remember Me</label>
                	</div>
                	
                </div>
					
                <div class="text-field submit">
                	<input type="submit" name="submit" value="Register Now" >
					
				</div>
			</form>
			<div class="login-signup">
				<span class="text">Already have an account?
                <a href="start.php" class="text signup-text">Login</a>
				</span>
			</div>
		</div>
	</div>
</div>





<script type="text/javascript">
	
function country_code() {
	var val = document.getElementById('country').value;
	if (val === "select country") {
		document.getElementById("output").value = " ";
	}
	else if(val === "US"){
		document.getElementById("output").value ="+1";
	}
	else if(val === "UK"){
		document.getElementById("output").value ="+44";
	}
	else if(val === "Br"){
		document.getElementById("output").value ="+55";
	}
	else if(val === "nig"){
		document.getElementById("output").value ="+234";
	}
}
 const container = document.querySelector(".container"),
   showHide = document.querySelectorAll(".showHide"),
  pwFields = document.querySelectorAll(".password");


   showHide.forEach(eyeIcon =>{
   	  eyeIcon.addEventListener("click",() =>{
   		pwFields.forEach(pwField =>{
   			if (pwField.type === "password") {
   				pwField.type = "text";
   				showHide.forEach(icon =>{
   					icon.classList.replace("fa fa-eye-slash ","fa fa-eye");
   				})
   			}else{
   				pwField.type = "password";
   				showHide.forEach(icon =>{
   					icon.classList.replace("fa fa-eye ","fa fa-eye-slash");
   				})
   			}
   		})
   	})
   })
</script>

