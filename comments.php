
<?php
include('db.php');
if (isset($_POST['submit'])) {
	$message = $_POST['message'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$website = $_POST['website'];

 if (empty($message) or empty($name) or empty($email)) {
 	$msg = "This field is required";
 }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $msg = "Invalid Email Format";
 }else{
 	$query = "INSERT INTO comments (message,name,email,website) VALUES('$message','$name','$email','$website')";
 	$result = mysqli_query($con,$query);

   if ($result) {
   	header("refresh:0;  url = articles.php");
   	echo "<script>alert('Comment has been shared successfully')</script>";
   } else{
   	header("refresh:0; url = articles.php");
   	echo "<script>alert('Error,try again')</script>";
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
</head>
<body>



<div style="background-color:#FFFFFF;margin-top: 45px; width: 100%;border-radius: 5px;height: 100vh;margin-top: 40px;" class="container">
	<div style="margin-top:40px;margin-left: 50px; ">
		<h3 style="margin-top:40px;">Leave a Comment</h3>
		<p style="font-size:18px;">Your email address will not be published.</p>
		<?php echo "<span style='color: red; font-weight: bolder; text-align: center;'>" .@$msg."</span>"; ?>
		<form method="post" action="articles.php">
			<textarea name="message" style="border-radius: 5px;outline: none;background-color: #FAFAFA;" rows="10" cols="120%"required>Type here.</textarea>
			<br>
			<br>
			<input style="width:30%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA;text-align: center;" type="text" name="name" placeholder="Name" required>
			<input style="width:30%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA; text-align:center ;" type="email" name="email" placeholder="Email" required>

			<input style="width:30%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA;text-align: center;" type="text" name="website" placeholder="Website">
			<br>
			<br>
			<button name="submit" style="font-weight:bolder;border: 5px;background-color: orange;color: white;width: 25%;border-radius: 10px;height: 40px;border-color: none;">POST COMMENT</button>
		</form>
	</div>
</div>
</body>
</html>