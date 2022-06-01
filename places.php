<?php
include('header.php');

// if (!isset($_SESSION['email'])) {
// 	header("Location : start.php");
// }else{

// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Places</title>
	<style type="text/css">
		body{
			background-color: #ccc;
		}
	</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1 style="font-weight:bolder;font-size: 90px;text-align: center;">TOURIST PLACES</h1>
<h4 style="color:#f07900; text-align:center;">AFRICA MOTHER OF BEAUTY</h4>

</div>
<br>
<br>
<br>
<br>


<div class="container">
	<p style="font-size: 20px;font-weight: bold;line-height: 1.5rem;">The African continent is one of the world’s most mesmerizing destinations. There are so many diverse adventures to be had on this amazing continent, home to more than 50 different countries, that it's hard to narrow them down for a best places list, but we have tried here.

Whether you are looking to explore vibrant cities like Cape Town, Cairo, and Marrakesh or hoping to see the continent’s wildlife on a safari in Kenya, South Africa, or Tanzania, there is no shortage of things to do for travelers of all types.

The African continent is also home to some stunning natural attractions, like Victoria Falls, which straddles the border of Zimbabwe and Zambia and is often described as one of the seven natural wonders of the world. And you'll find soaring mountain peaks, like Tanzania’s Mount Kilimanjaro, which, at more than 19,000-feet, is Africa’s highest mountain.

And then there are the beaches. With thousands of miles of coastline, you’ll find warm, turquoise-hued waters and white-sand beaches on mystical islands like Zanzibar off the coast of Tanzania and the Bazaruto Archipelago off the coast of Mozambique on Africa’s eastern coastline.

Wherever you wander in Africa, we promise you’ll leave with a new appreciation for the magic of this culturally rich, vibrantly colored, and welcoming continent that will have you wanting to return over and over. Plan your adventures with our list of the best places to visit in Africa.</p>
	
</div>
<br>
<br>

<?php
include ('db.php');


$query = "SELECT * FROM places ";
$result = mysqli_query($con,$query);
while ($arr = mysqli_fetch_assoc($result)) {
	$id = $arr['id'];
	$title = $arr['title'];
	$filename = $arr['filename'];
	$content = $arr['content'];

	

	

echo"
<div style='padding: 15px;'>
<h2 style='font-weight: bolder;'>$title</h2>;
<div class='container'>
<img src='upload/$filename'>
</div>
<div class='container'>
<p style='text-align:center; justify; line-height: 2.5rem;font-weight:100;text-align:justify;'>$content</p>;
</div>

	</div><br>


				";
}




?>






<?php include('footer.php');
 ?>
 
</body>
</html>