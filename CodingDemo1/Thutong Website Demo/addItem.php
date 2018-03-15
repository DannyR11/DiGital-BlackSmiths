<!DOCTYPE html>
<!---->
<html>
	<head>
		<meta charset="UTF-8"></meta>
		<meta name="author" content=""></meta>
		<title> Imy Project addItem </title>
		<link href="css/home-style.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
			<div class ="row">
				<form method="post">
					<fieldset>
						<legend>Checking database components</legend>
						</fieldset>
						<br/>

	
				
						<?php


							session_start( );
							  	$servername = "localhost";
				                $username = "root";
				                $password = "";
				                $dbname = "dbbooks";

				       		$db = mysqli_connect($servername, $username, $password, $dbname);
							

							$output = '';


							if (isset($_POST['title']) && isset($_POST['author']))
							{


								mysqli_SELECT_db($db, "dbbooks");


								$sql = "CREATE TABLE IF NOT EXISTS tbbooks (
								book_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
								title VARCHAR(100) NOT NULL,
								author VARCHAR(100) NOT NULL,
								yearPub DATE,
								description VARCHAR(100), 
								genres VARCHAR(100) NOT NULL, 
								bookImage VARCHAR(100), 
								rating INT,
								checkedIn VARCHAR(100),
								DateChecked DATE
								)";



								if (mysqli_query($db, $sql))
								{
									echo "<a>Table tbuser created successfully<br></a>";
								}
								else
								{
									echo "<a>Error creating table: <br> </a>" . mysqli_error($db);
								}


							
								$title = $_POST['title'];
								$author = $_POST['author'];
								$date = date("Y/m/d");
								$description = $_POST['Bdescription'];
								$genres = $_POST['genres'];
								$bookImage = "Uploads/anon.jpg";
								
								
								$seller = $_SESSION["username"];

								$title = mysqli_real_escape_string($db, $title);
								$author = mysqli_real_escape_string($db, $author);
								// $itemPrice = mysqli_real_escape_string($db, $itemPrice);


								echo "<a> $title...... </a>";
								echo "<a> $author...... </a>";
								echo "<a> $description...... </a>";
								echo "<a> $date...... </a>";
								echo "<a> $genres...... </a>";
								echo "<a> $bookImage...... </a>";
					

								$sql = "INSERT INTO tbbooks (title, author, yearPub, description, genres, BookImage)
								VALUES ('$title', '$author', '$date', '$description', '$genres', '$bookImage')" ;
								

								$query = mysqli_query($db,$sql);
								

								if(session_id() == '')
								{
									// session_start();
								    echo "<a> Session Start. </a>";
								}
								
								
								// $_SESSION["user"] = $row['user_id'];
								// $_SESSION["username"] = $row['name'];
								header('Location: main.php');


								if ($query)
								{
									header('Location: main.php');
								}
		
									
								 
							}
						   
						?>
				<form>
			
			</div>
			
			<div class="row">
		</div>

		</div>
		

		
		
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
