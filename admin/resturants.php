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
		<img style="style= margin: 80px;" src="Upload/lagos.jpg">
		<h2>60 Restaurants To Visit In Lagos</h2>
		<br>
		<a href="">Leave a Comment /by Planet</a>
		<p>Lagos is that city, full of vibrant never-ending energy. Whether you’re looking to refuel after a busy day, or you want to take that special person on a date or just want to give your taste buds a new experience, this post is for you. Here’s a comprehensive list I compiled to give you options when next you want to visit a restaurant.</p>
		<p>Over the coming weeks, would be visiting most of these restaurants and giving my in-depth reviews both here and on my Youtube</p>
		<h1>MAINLAND</h1>
		<br>
		<ul>
			<li>Bungalow</li>

             <li>Burg</li>

            <li>Cut Steakhouse</li>
 
            <li>De Bull Restaurant</li>
             <li>Gypsy Restaurant</li>
             <li>Hua Han</li>

            <li>Ocean Basket</li>

              <li>LaCibo</li>

              <li>Orchid House</li>
               <li>Rhapsody</li>

               <li>Spur</li>

            <li>The Grid Lagos</li>
		</ul>
		<h1>VICTORIA ISLAND</h1>
		<br>
		<ul>
			<li>355 Landmark</li>

<li>Arabesque</li>

<li>Backyard</li>

<li>BL Restaurant</li>

<li>Bottles</li>

<li>Bungalows</li>
<li>Cactus</li>

<li>Cafeteria</li>
<li>Casa Mia</li>
<li>CCX Lagos</li>

<li>Craft Gourmet</li>

<li>Crepaway</li>

<li>Crossroads</li>

<li>Delis Café</li>

<li>Eric Kayser</li>

<li>Flowershop</li>

<li>Food Shack</li>

<li>Good Life By Seattle</li>

<li>Hard Rock</li>

<li>KrispyKreme</li>

<li>La Brioche</li>

<li>La Veranda</li>

<li>Lagoon Restaurant</li>

<li>My Coffee Lagos</li>

<li>Noir Lagos</li>
<li>Ocean Basket</li>

<li>Orchid House</li>

<li>Pearl Restaurant</li>

<li>RSVP</li>

<li>Sabor Lagos</li>

<li>Shiro Lagos</li>

<li>Sky Restaurant</li>

<li>Smokey Bones</li>

<li>Talindo Steakhouse</li>

<li>The Grill by Delis</li>

<li>The House Lagos</li>

            
		</ul>
		<h1>LEKKI</h1>
		<br>
		<ul>
<li>Shark Express</li>

<li>Spur & Panarottis</li>

<li>Stories Lagos</li>

<li>The House Cafe</li>

<li>The Patio Lagos</li>
<li>The Tea Room</li>

<li>Woks & Koi</li>
</ul>
<h1>IKOYI</h1>
<br>
<li>Danfo Bistro</li>

<li>Godaif Village</li>

<li>Traffic Bar</li>

<li>Zolene Dining</li>
<p>Which of these have you visited? What was your experience? Let’s talk in the comments</p>
<a href="">Share for others to see</a>
	</div>
</div>
<br>
<br>
<br>
<div class="left">
	<a href="articles.php"> &larr;Previous Post</a>
</div>


<div class="right">
	<a href="">Next Post &rarr;</a>
</div>





<?php include('comments.php');?>






















<?php include('footer.php');
} ?>
</body>
</html>








