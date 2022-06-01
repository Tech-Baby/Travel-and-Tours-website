<?php
include('db.php');

$id = $_GET['id'];

$query = "DELETE FROM articles WHERE id='$id'";
$result = mysqli_query($con,$query);
if ($result) {
	header("refresh:0; url='article.php'");
	echo "<script>alert('Article deleted successfully')</script>";
}else{
	echo "<script>alert('Unable to delete  article')</script>";
}


?>