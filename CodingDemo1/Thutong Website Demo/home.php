<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<!---->
		<meta name="author" content="" />
		<title>IMY 220 - A3</title> 
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/login-style.css">
	</head>
	<body>
		<body background="blur-backgrounds/blur-background07.jpg">


<script type="text/javascript">
			(function(){
			   setTimeout(function(){
			     window.location="index.php";
			   }, 2000); /* 1000 = 1 second*/
			})();
		</script>


		<div class="container">
			<div class="row">
				<?php
					
					$email = $_POST["email"];
					$password = $_POST["pass"];
					
					
					define('DB_SERVER', 'localhost');
					define('DB_USERNAME', 'root');
					define('DB_PASSWORD', "");
					define('DB_DATABASE', 'ThutongDB');
					 
					$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
										
					$email = mysqli_real_escape_string($db, $email);
					$password = mysqli_real_escape_string($db, $password);
					
					$sql = "SELECT UserID, Name, Email FROM UsersTB WHERE Email='$email' AND Password='$password'";
					
					$result = mysqli_query($db,$sql);
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
					 
					if(mysqli_num_rows($result) == 0)
					{
					 echo "<div class='alert alert-danger center'> 
							This username or password is incorrect!
							<a href='index.html'><button class='btn btn-default'>Return to Login</button></a>
						</div>";
					}
					else
					{
						echo "<div class='alert alert-success center'> 
							This username or password is correct!
							<a href='index.html'><button class='btn btn-default'>Return to Login</button></a>
						</div>";
						session_start();
						$_SESSION["user"] = $row['UserID'];
						$_SESSION["username"]= $row['Name'];
						// header('Location: index.php');
					}
					
				?>
			</div><!--/row-->
		</div><!--/container-->
		
	</body>
</html>
