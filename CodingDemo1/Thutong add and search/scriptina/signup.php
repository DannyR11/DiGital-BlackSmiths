<?php
	// See all errors and warnings
	error_reporting(E_ALL);
	ini_set('error_reporting', E_ALL);

	// You'll have to change these details for it to work on the server	
	$mysqli = mysqli_connect("localhost", "u14347980_15", "zTQiFApr", "u14347980_15");

	$name = $_POST["fname"];
	$surname = $_POST["lname"];
	$email = $_POST["email1"];
	$date = $_POST["date"];
	$pass1 = $_POST["pass1"];
	$pass2 = $_POST["pass2"];

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>IMY 220 - Assignment 2</title>
	<meta charset="utf-8">
</head>
<body background="Pictures/backround.jpg">

		<script type="text/javascript">
			(function(){
			   setTimeout(function(){
			     window.location="index.html";
			   },5000); /* 1000 = 1 second*/
			})();
		</script>


	<div class="container">
		<?php 

		$nothing = "nothing.png";
			if($pass1!=$pass2 || $email=="" || $pass1=="")
			{
				echo "<div class='alert alert-danger'>Error check details.</div>";
			}
			else
			{
				echo "<div class='alert alert-success'>Passwords and email are correct (check). You will be re - directed. </div>";
				$query = "INSERT INTO tbusers (name, surname, email, birthday, password, profilePic) VALUES ('$name', '$surname', '$email', '$date', '$pass1', '$nothing');";
				
				$res = mysqli_query($mysqli, $query) == TRUE;
				echo $res ? "The account has been created" : "The account could not be created";
			}

		?>
	</div>
</body>
</html>