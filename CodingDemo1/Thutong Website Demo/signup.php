<?php
	// See all errors and warnings
	error_reporting(E_ALL);
	ini_set('error_reporting', E_ALL);

	// You'll have to change these details for it to work on the server	
	$mysqli = mysqli_connect("localhost", "root", "", "ThutongDB");

	$name = $_POST["fname"];
	$surname = $_POST["lname"];
	$email = $_POST["email1"];
	$AdminConsultStatus = $_POST["admin"];
	$pass1 = $_POST["pass1"];
	$pass2 = $_POST["pass2"];

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>IMY 220 - Assignment 2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body background="blur-backgrounds/blur-background08.jpg">


		<script type="text/javascript">
			(function(){
			   setTimeout(function(){
			     window.location="index.html";
			   },4000); /* 1000 = 1 second*/
			})();
		</script>


	<div class="container">
		<?php 

		$nothing = "No Categories visited";
			if($pass1!=$pass2 || $email=="" || $pass1=="")
			{
				echo "<div class='alert alert-danger'>Error check details.</div>";
			}
			else
			{
				echo "<div class='alert alert-success'>Passwords and email are correct (check). You will be re - directed. </br>";
				$query = "INSERT INTO UsersTb (Name, Surname, Email, AdminConsultStatus, Password, AccessedCategories) VALUES ('$name', '$surname', '$email', '$AdminConsultStatus', '$pass1', '$nothing')";
				
				$res = mysqli_query($mysqli, $query) == TRUE;
				echo $res ? "The account has been created" : "The account could not be created</div>";
			}

		?>
	</div>
</body>
</html>