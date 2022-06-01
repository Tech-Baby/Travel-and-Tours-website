<?php
include('db.php');
session_start();
if (isset($_SESSION['email'])) {
	header('Location:home.php');
}else{






if (isset($_POST['loginBtn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($_POST)) {
    	$msg = "Email Field Is Required";
    }elseif (strlen($password) < 6) {
    	$msg = "Password is too short";
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    	$msg = "Invalid Email Format";
    }else {
     $imp = "SELECT*FROM user WHERE email = '$email' and password = '$password'";
     $result = mysqli_query($con,$imp);

     if ($result) { 	
     	$num_rows = mysqli_num_rows($result);
     	if ($num_rows == 1) {
     		while ($arr = mysqli_fetch_assoc($result)) {
     			$fullname = $arr['fullname'];
     			$email = $arr['email'];
     			$filename = $arr['filename'];



     			$_SESSION['fullname'] =$fullname;
     			$_SESSION['email'] =  $email;
     			$_SESSION['filename'] = $filename;

     			header("Location:dashboard.php");
     		}
     	}else{
     		$msg ="Invalid Login Details";
     	}
     }
      
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
		height: 100vh;
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
<body>



<body style="background-color:#2c3e50;">
<div class="col-6 container" >
	<h3 style="color:white;">User Login</h3>
	<div class="card">
			<?php echo "<span style='color: red; font-weight: bolder; text-align: center;'>" .@$msg."</span>"; ?>
		<div class="container">
	<div class="forms">
		<div class="form">
			<span class="title">Login</span>
			<form action="login.php" method="post">
				<div class="text-field">
					<input type="text" name="email" placeholder="E-mail"><i class="fa fa-envelope  icon"></i>
					
				</div>
				<div class="text-field">
					<input type="password" class="password" name="password" placeholder="Password"><i class="fa fa-lock  icon"></i>
					<i class="fa fa-eye-slash   showHide"></i>
				</div>
                <div class="checkbox">
                	<div class="checkbox-content">
                		<input type="checkbox" name="" id="logCheck">
                		<label for="logCheck" class="text">Remember Me</label>
                	</div>
                	<a href="#" class="text">Forgot Password?</a>
                </div>
                <div class="text-field submit">
					<input type="submit" name="loginBtn" value="Login Now" >
					
				</div>
			</form>
			<div class="login-signup">
				<span class="text">Not a member?
                <a href="index.php" class="text signup-text">Signup now</a>
				</span>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
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
   					icon.classList.replace("fa fa-eye","fa fa-eye-slash");
   				})
   			}
   		})
   	})
   })
</script>














<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php } ?>
</body>
</html>