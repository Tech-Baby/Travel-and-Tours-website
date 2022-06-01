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
	<title>Resturant</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body{
			background: #ccc;
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
			list-style: none;
		}
		.container{
			align-items: center;
		}
	</style>
</head>
<body>
<div style="background-color:#FFFFFF;margin-top: 45px; width: 100%;border-radius: 5px;" class="container">
	<div style="margin-top:30px; margin-left: 30px;">
		<?php

$id = $_GET['id'];

$query = "SELECT * FROM articles WHERE id='$id'";
$result = mysqli_query($con,$query);
while ($arr = mysqli_fetch_assoc($result)) {
	$id = $arr['id'];
	$title = $arr['title'];
	$content = $arr['content'];
	$filename = $arr['filename'];

echo"
<div class='card' style='padding: 15px;'>
<img src='upload/$filename'>
<h2 style='font-weight: bolder;'>$title</h2>;

<p style='text-align:center; justify; line-height: 1.5rem;font-weight:100;'>$content</p>;
<div style='text-align: right;'>


	</div>
	</div><br>

				";
}

?>

<?php include('comments.php');?>






















<?php include('footer.php');
} ?>
</body>
</html>








