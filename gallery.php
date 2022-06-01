<?php
include('header.php');

// if (!isset($_SESSION['email'])) {
// 	header("Location : start.php");
// }else{


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery</title>
  <style type="text/css">
    .row{
     display: flex;
     height: 88%;
    }
    .col{
      flex-basis: 50%;
    }
     .card {
      width:300px ;
      height: 230px;
      display: inline-block;
      border-radius: 10px;
      padding: 15px 25px;
      box-sizing: border-box;
      cursor: pointer;
      margin: 12px 15px;
      background-position: center;
      background-size: cover;
      transition: transform 0.5s;


    }
  </style>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://kit.fontawesome.com/903005c18e.js" crossorigin="anonymous"></script>
</head>
<body>

  <div class='container'>
    <div class='row'>
<?php
include("db.php");



$query = "SELECT * FROM gallery  ";
$result = mysqli_query($con,$query);

if ($result) {
  while ($arr = mysqli_fetch_assoc($result)) {
  $id = $arr['id'];
  $title = $arr['title'];
  $filename = $arr['filename'];

 


  

echo"

        <div class ='col-lg-4'>
            <div class='card' style='padding: 15px;border:box-sizing;'>
                  <img style='width:280px;height:200px;border-radius:5px;' src='upload/$filename'>
                  <h2 style='font-size:16px;font-weight:bolder'>$title </h2>
            </div>
        </div>

       <br> ";
}




}

?>

	


    </div>
</div>

<?php include('footer.php');

?>
<?php
  

?>

</body>
</html>