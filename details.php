<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="images/tplogo.PNG">
		<title>
		Schedule Solutions
		</title>
		<meta name="viewport" content="width=device-width, initial scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/tp.css" />
		<link rel="stylesheet" href="tp.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="sss/sss.min.js"></script>
		<link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">
		<script>jQuery(function($) {$('.slider').sss();});</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
		<ul class="nav navbar-nav navbar-right">
					<li><a href="Home.php">Home</a></li>
					<li><a href="details.php">Details</a></li>
					<li><a href="class.php">Class + CA Input</a></li>
					<li><a href="timetable.php">Timetable</a></li>
					<li><a href="index.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
		</ul>
	</head>
	<body>
		<div id="box1" class ="style1">
		  <form action="/action_page.php">
			  Username: <input type="text" name="Username" value=""><br>
			  New Password: <input type="text" name="NewPassword" value=""><br>
			  Re-Enter Password: <input type="text" name="RePassword" value=""><br>
			  Name: <input type="text" name="Name" value=""><br>
			  Address: <input type="text" name="Address" value=""><br>
			  Course: <input type="text" name="Course" value=""><br>
			  <input type="submit" value="Submit">
		  </form>
		</div>
	</body>
	<?php
	$user = 'root';
	$pass = '';
	$rdb = 'student';
  
	$connect = new mysqli('localhost', $user, $pass, $rdb) or die("Unable to connect.");
	?>
</html>