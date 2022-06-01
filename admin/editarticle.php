<?php
session_start();
include('db.php');

$id = $_GET['id'];

$query = "SELECT * FROM articles WHERE id='$id'";
$result = mysqli_query($con,$query);

while($arr = mysqli_fetch_assoc($result)){
	$id = $arr['id'];
	$title = $arr['title'];
	$content = $arr['content'];


$_SESSION['id'] = $id;
$_SESSION['title'] = $title;
$_SESSION['content'] = $content;





}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="card mt-3">
	<form action="finaledit.php" method="post">
		<input type="hidden" name="id"  value="<?php echo $_SESSION['id'];?>">
<label style="font-weight:bolder;">Title</label>

<input type="text" value="<?php echo $_SESSION['title'];?>" name="title" placeholder="Enter a title" class="form-control">

<label style="font-weight:bolder;">Content</label>
<textarea name="content" class="form-control mt-3" placeholder="Enter Message" cols="20" rows="10">"<?php echo $_SESSION['content'];?>"</textarea>
<input type="submit" name="updateArticle" value="Update" class="btn btn-success" >

	</form>
	</div>
    </div>
</body>
</html>