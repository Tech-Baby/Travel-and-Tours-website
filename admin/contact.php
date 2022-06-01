<?php
include('header.php');

include('db.php');

 echo" <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>";

	

	echo "

	<div class='container' style='margin-top: 30px;'>
	<h2>Messages</h2>
			<table class='table table-bordered table-striped'>	
				<tr>
					<th>
						Full Name
					</th>
					&nbsp&nbsp
					<th>
						Email
					</th>
					<th>
						Subject
					</th>
					<th>
						Message
					</th>
				</tr>
			
		";

	

	$query = "SELECT * FROM reply ";
	$result = mysqli_query($con, $query);
	while ($arr = mysqli_fetch_assoc($result)) {
		$id = $arr['id'];
	    $name = $arr['name'];
	    $email = $arr['email'];
	    $subject = $arr['subject'];
	     $message = $arr['message'];
		


		echo "


		<tr>
			<td>
				$name
			</td>

			<td>
				$email
			</td>
			<td>
				$subject
			</td>
			<td>
				$message
			</td>
			
		</tr>



		";
	}

	echo "</table></div>";
 ?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
