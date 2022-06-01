
<?php
include('db.php');
session_start();
if (isset($_POST['loginBtn'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

if (empty($email) or empty($password)) {
	$msg = "All fields are required";
}else{
  $query ="SELECT * FROM admin WHERE email = '$email' and password = '$password' ";
  $result = mysqli_query($con,$query);

  // if ($result) {
  	$num_rows = mysqli_num_rows($result);
  	if ($num_rows == 1) {
  	while ($arr = mysqli_fetch_assoc($result)){
  				$email = $arr['email'];
     			$password = $arr['password'];




     			$_SESSION['email'] = $email;
     		    $_SESSION['password'] =$password;
     		    header("Location: article.php");




     			
  	}
  	
  }else{
  	echo "Invalid Login Details";
  }
}




}






?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color:#ccc;">
	<?php echo "<span style='color: red; font-weight: bolder; text-align: center;'>" .@$msg."</span>"; ?>
	<div style="text-align:center;"class="container">
<form method="post" action="login.php">
	<br>
	<br>
	<div>
		<h2 style="text-align:center;">Admin Login</h2>
	</div>
	<br><br><br>
	<div><input style="width:30%;height:40px; border-radius: 10px;border-color: black;outline-color: none;" type="email" name="email" placeholder="Enter E-mail"></div>
	
	<br>
	<div><input style="width:30%;height:40px;border-radius: 10px;border-color: black;outline-color: none;" type="password" name="password" placeholder="Enter Password"></div>
	<br><br>
	
	<input style="border-radius:10px;background-color: orange;border-color: orange;width: 20%;height: 40px;" type="submit" name="loginBtn" value="Login">
</form>
</div>
</body>
</html>