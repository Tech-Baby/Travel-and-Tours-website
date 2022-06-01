<?php 
	session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/903005c18e.js" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			background-color: #ccc;
		}
		.container{
			text-align: center;
			background-color: #fff;

		}
		.a2{
			color: orange;
			font-weight: bold;

		}
		a:hover{
			color: orange;
		}
		.a1{
			color: white;
		}
		
	</style>
	
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<img style="width: 50px;cursor: pointer;background-color: #ccc;" src="Upload/logo.jpg">
  <a class="navbar-brand" href="#">Planet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="travel.php">JOURNEY</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php">SIGN UP</a>
          <a class="dropdown-item" href="login.php">LOG IN</a>
          
          <?php
          		if (!isset($_SESSION['email'])) {
          		
          		}else{
          			echo "<div class='dropdown-divider'></div>";

          			echo "<a class='dropdown-item' href='logout.php'>LOG OUT</a>";  

          		}
          ?>


        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="about.php">ABOUT</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<br>
	<br>
	<br>
	<br>
	<br>
<div  style="background-position: center;text-align: center;background-color: #fff;" class="container">
	<div >
		<h1>AVAILABLE ARTICLES</h1>
		<br>
		<br>
	</div>



	<?php
		include('db.php');

		$query = "SELECT * FROM articles";
		$result = mysqli_query($con, $query);
		while($arr = mysqli_fetch_assoc($result)){
			$id = $arr['id'];
			$filename = $arr['filename'];
			$title = $arr['title'];
			$content = $arr['content'];

			$partcontent = substr($content, 0, 300);

			echo "

						<div>
		<img src='upload/$filename'>
		<br>
		<h2>$title</h2>

		<br>
		<a class='a2'  style='text-align:left;' href='comments.php'>Leave a comment/by Planet</a>
		<p>$partcontent</p>
		<br>

		<a class='btn btn-primary' href='articles.php?id=$id'>Read More &rarr;</a>
		
            
	</div>
      <br>
			";
		}

	?>





			
	</div>
<?php include('footer.php');
 ?>

</body>
</html>