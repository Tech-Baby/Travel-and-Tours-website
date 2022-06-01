<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>

<div class="container" style="margin-top: 20px;">
	<table class=" table table-striped table-bordered">
		<tr>
			<td>S/N</td>
			<td>Name</td>
			<td>Customer-ID</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Falowo Olamide Elizabeth</td>
			<td>3138864531</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Falowo Olamide Elizabeth</td>
			<td>3138864531</td>
		</tr><tr>
			<td>1</td>
			<td>Falowo Olamide Elizabeth</td>
			<td>3138864531</td>
		</tr><tr>
			<td>1</td>
			<td>Falowo Olamide Elizabeth</td>
			<td>3138864531</td>
		</tr><tr>
			<td>1</td>
			<td>Falowo Olamide Elizabeth</td>
			<td>3138864531</td>
		</tr><tr>
			<td>1</td>
			<td>Falowo Olamide Elizabeth</td>
			<td>3138864531</td>
		</tr>

	</table>
</div>

<?php

$firstValue = 30;
$secondValue = 20;

if($firstValue > $secondValue){
	echo "it is less";
}else{
echo "it is not less";


}
$bb = 10;
$cc = 11;
$dd = 12;

if(($bb < $cc) && ($cc > $dd)){
	echo "you know what you're doing";
}else{
	echo " you are not serious";
}

if (($bb < $cc)|| ($cc > $dd)) {
	echo "you know what you're doing";
}else{
	echo " you are not serious ";
}

$vb = 2;
$vn = 3;

if ($vb <= $vn) {
	echo "yes";
}else{
	echo "no";
}

if ($vb != $vn) {
	echo "yes";
}else{
	echo "no";
}


$nameOne = "Olamide";
$nameTwo = "MJ";
echo $nameOne." " .$nameTwo;

for ($i=0; $i <11 ; $i++) { 
	echo $i;
}
for ($i=1; $i < 11 ; $i++) { 
	if ($i == 6) {
		continue;
	}
	echo $i;
}
echo "<div class = 'container'><h2>Mutiplication Table </h2> ";
echo "<table class = 'table table-striped table-bordered'>  <tr>";
for ($a=1; $a<13; $a++) { 
	for($i=1; $i<13; $i++) { 
		echo "<td>" . $a * $i."</td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "</div>";

$score = 40;

if ($score < 41) {
   echo "Failed";
}elseif ($score < 50) {
	echo "Fair";
}elseif ($score < 60){
 echo "Good";
}elseif($score < 70){
	echo "very Good";
}elseif ($score > 70) {
	echo "Excellent";
}

$nameOne = " Falowo Olamide";
echo substr($nameOne, 0,11);

echo(rand())



?>


































































































<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>