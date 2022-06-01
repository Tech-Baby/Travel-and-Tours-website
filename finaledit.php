<?php
include('db.php');

if (isset($_POST['updateArticle'])) {

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$query= "UPDATE articles SET title='$title',content='$content' WHERE id ='$id'";
$result= mysqli_query($con,$query);
if ($result) {
	header("refresh:0; url=article.php");
	echo "<script>alert('Post Updated')</script>";
}else{
	header("refresh:0;url=article.php");
	echo "<script>alert('Unable to Update Post')</script>";
}




	
}










?>