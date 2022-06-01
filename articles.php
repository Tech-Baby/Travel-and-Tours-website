<?php
include('header.php');

echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>";



if (!isset($_SESSION['email'])) {
	// header("Location: start.php");
	echo "<div class='alert alert-danger container' style='margin-top: 20px;'>Kindly Login to begin <a href='login.php'>Click</a></div>";
}else{


?>
<?php
include('db.php');
if (isset($_POST['submit'])) {
	$postid = $_POST['postid'];
	$message = $_POST['message'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$website = $_POST['website'];

 if (empty($message) or empty($name) or empty($email)) {
 	$msg = "This field is required";
 }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $msg = "Invalid Email Format";
 }else{
 	$query = "INSERT INTO comments (message,name,email,website,postid ) VALUES('$message','$name','$email','$website','$postid')";
 	$result = mysqli_query($con,$query);

   if ($result) {
   	// header("refresh:0;  url=dashboard.php");
   	echo "<script>alert('Comment added successfully')</script>";
   	echo "<script>location.replace('short.php')</script>";

   	
   } else{
   	header("refresh:0; url=short.php");
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
	<script src="https://kit.fontawesome.com/903005c18e.js" crossorigin="anonymous"></script>
	<title>Articles</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body{
			background: ;
		}
		.left{
			margin-left: 14%;
		}
		.right{
			text-align: right;
			margin-right: 14%;
			margin-top: -30px;
		}
		a{
			color: orange;
		}
		a:hover{
			color: orange;
		}
		h3{
			font-size: 25px;
			font-weight: 600;
		}
		p{
			font-weight: bold;
		}
		ul{
			font-weight: bold;
		}
		.social{
			color: orange;

		}

		.group button {
  background-color:orange; 
   border: 1px solid orange; 
  border-radius: 25px;
  color: #FEFEFE; 
  padding: 12px 20px ; 
  cursor: pointer; 
  margin-left :40px
}
	</style>
</head>
<body >
<?php

$id = $_GET['id'];

$query = "SELECT * FROM articles WHERE id='$id'";
$result = mysqli_query($con,$query);
while ($arr = mysqli_fetch_assoc($result)) {
	$id = $arr['id'];
	$title = $arr['title'];
	$content = $arr['content'];
	$filename = $arr['filename'];

	$_SESSION['postid'] = $id;

	

echo"
<div class='card' style='padding: 15px;'>
<img src='upload/$filename'>
<h2 style='font-weight: bolder;text-align:center;'>$title</h2>;
<div class='container'>
<p style='text-align:center; justify; line-height: 2.5rem;font-weight:100;text-align:justify;'>$content</p>;
</div>
<div style='text-align: right;'>
<div class ='social' style = 'color :orange;'>

<a href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com' target='_blank'>
  <i style ='color:orange;' class='fa-brands fa-facebook-square'></i>
</a>
&nbsp&nbsp
<a href='https://twitter.com/intent/tweet?url=link_to_be_shared'><i style ='color:orange;' class='fa-brands fa-twitter-square'></i></a>
<a class='btn-floating btn btn-tw' type='button' role='button' title='Share on facebook'
   href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com' target='_blank'
   rel='noopener'><i style ='color:orange;' class='fa-brands fa-instagram-square'></i></a>
<a href='https://wa.me/?text=urlencodedtext'><i style ='color:orange;' class='fa fa-whatsapp'></i></a>
</div>
	</div>
	</div><br>


				";
}




?>

<br>
<br>





<?php 
require_once("db.php"); 
$id = $_GET['id']; 
$result = mysqli_query($con, "SELECT * FROM articles WHERE id=$id");
?>
<div class="group">

<?php
$next = mysqli_query($con, "SELECT * FROM articles WHERE id>$id order by id ASC");
if($arr = mysqli_fetch_array($next))
{

  echo '<a href="articles.php?id='.$arr['id'].'"><button type="button">Next</button></a>';  
} 

echo " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
// Previous button 
$previous= mysqli_query($con, "SELECT * FROM articles WHERE id<$id order by id DESC");

if($arr = mysqli_fetch_array($previous))
{

  echo '<div style = "text-align:right;margin-top:-40px;"><a style = "text-align:right;" href="articles.php?id='.$arr['id'].'"><button type="button" style ="justify:right;align-content:right;">Previous</button></a></div>';  
} 
?>

<div style="background-color:#FFFFFF; width: 100%;border-radius: 5px; margin-top: 40px;" class="container">
	<div style="margin-top:40px;margin-left: 50px; ">
		<h3 style="margin-top:40px;">Leave a Comment</h3>
		<p style="font-size:18px;">Your email address will not be published.</p>
		<form method="post" action="articles.php">
			<textarea name="message" placeholder="Type Here." style="border-radius: 5px;outline: none;background-color: #FAFAFA;padding: 20px;" rows="10" cols="120%"required></textarea>
			<br>
			<br>


			<input type="hidden" name="postid" value="<?php echo $_SESSION['postid']; ?>">

			<input style="width:30%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA;text-align: center;" type="text" name="name" placeholder="Name" required>
			<input style="width:30%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA; text-align:center ;" type="email" name="email" placeholder="Email" required>

			<input style="width:30%;height: 50px;border-radius: 5px;outline: none;background-color: #FAFAFA;text-align: center;" type="text" name="website" placeholder="Website">
			<br>
			<br>
			<button name="submit" style="font-weight:bolder;border: 5px;background-color: orange;color: white;width: 25%;border-radius: 10px;height: 40px;border-color: none;">POST COMMENT</button>
		</form>
	</div>
</div>


<?php

$id = $_GET['id'];
$query = "SELECT * FROM comments WHERE postid='$id'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);

echo "<div class='container' style='margin-buttom: 10px; font-weight: bolder;'>Comments: " . "(" . $count . ")</div><br>";
if ($result) {

while ($arr = mysqli_fetch_assoc($result)) {
	$id = $arr['id'];
	$message = $arr['message'];
	$name = $arr['name'];
	$email = $arr['email'];
	$website = $arr['website'];
	

echo"
<div class='container'>

	<img style='width: 50px; height: 50px; border-radius: 100%;' src='upload/avartar.png' alt='Unable to Load Image'>

	<p>$message</p>
	<p>$name</p>

</div>


				";
			}
	
}else{
	echo "<script>alert('Error,try again')</script>";
}





?>

<script type="text/javascript">
	
</script>


<?php include('footer.php');
 ?>
<?php } ?>
</body>
</html>