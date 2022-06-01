<?php include('header.php');
include('db.php');

if (isset($_POST['addUp'])) {
  $title = $_POST['title'];
  $content = $_POST['content'];
  $filename = $_FILES['fileToUpload']['name'];
  $tmp_name = $_FILES['fileToUpload']['tmp_name'];

  $path = "upload/$filename";

  if (empty($_POST['title']) or empty($_POST['content'])) {
  $msg = "All fields are required";
}else{
	$upload = move_uploaded_file($tmp_name,$path);
	if ($upload){
     	$query = "INSERT INTO articles(title, content,filename) VALUES ('$title', '$content','$filename')";
   			$result = mysqli_query($con, $query);
   			if ($result) {
   				echo "<script>alert(' Successful')</script>";
   			}else{
   				echo "<script>alert('Error,Please Try Again')</script>";
   		}

   		}else{
   			$msg = "Unable to upload image";
   		}
     }
   		
}




 ?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://kit.fontawesome.com/903005c18e.js" crossorigin="anonymous"></script>


<div class="container" style="margin-top: 20px;">
	<input type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-backdrop='' value="Add Article" name="">
	<div class = 'container' style='margin-top:30px;'>
<a href = "" style="font-weight:bolder;text decoration:none;color:#000;font-size:30px; border-bottom:4px solid teal;">Available Articles</a>

</div>


<?php
$query = "SELECT*FROM articles";
$result = mysqli_query($con,$query);
while ($arr = mysqli_fetch_assoc($result)) {
	$id = $arr['id'];
	$title = $arr['title'];
	$content = $arr['content'];
	$filename = $arr['filename'];

echo"
<div class='card' style='padding: 15px;'>
<img style='width: 80px; height: 80px; border-radius: 100%;' src='upload/$filename'>
<h2 style='font-weight: bolder;'>$title</h2>;

<p style='text-align: justify; line-height: 1.8rem;'>$content</p>;
<div style='text-align: right;'>
<a href='deletearticle.php?id=$id' class='btn btn-sm btn-danger'> <i class='fa fa-trash'></i>  </a>
<a href='editarticle.php?id=$id' class='btn btn-sm btn-primary'><i class='fa fa-edit'></i> </a>


	</div>
	</div><br>

				";
}

?>






























































































<?php
	include('footer.php');
?>
