<!DOCTYPE>
	<html>
	
	<head>
		<meta charset="UTF-8" />
		<!--Insert your own name and surname-->
		<meta name="author" content="Daniel Rocha" />
		<title>IMY 220 - P2</title> 
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>

	<body>


		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
				
				<div class="panel panel-default">
				<div class="panel-body">
				
					<form action="index.php" method="post">
						<fieldset>
							<legend>Add New Book</legend>
							<div class="form-group">
								<label for="title">Title:</label>
								<input type="title" class="form-control" name="title" id="title" placeholder="Manhatten"/>
							</div>
							<div class="form-group">
								<label for="genre">Genre:</label>
								<select class="form-control" name="genre" id="genre">
								  <option value="Fiction: SciFi">Fiction: SciFi</option>
								  <option value="Fiction: Adventure">Fiction: Adventure</option>
								  <option value="Fiction: Drama">Fiction: Drama</option>
								</select>
								
							</div>
							<input type="submit" value="Add Book" class="btn btn-default" />
						</fieldset>
					</form>
					
				</div><!--/panel-body-->
				</div><!--/panel-->
				
				</div> <!--/col1-->
				
			</div><!--/row-->
		</div><!--/container-->
		
	
		<?php

			
			$title = $_POST['title'];
			$genre = $_POST['genre'];
			

			

				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "dbUser";


				// Create connection
				$conn = mysqli_connect($servername, $username, $password);
				// Check connection
				if (!$conn)
				die("Connection failed: " . mysqli_connect_error());




				$sql = "CREATE DATABASE IF NOT EXISTS dbbooks";

				/*if(mysqli_query($conn, $sql))
				{
					echo "Database created dbbooks successfully<br>";
				}
				else
				{
					echo "Error creating database.....: <br>" . mysqli_error($conn);
				}*/

				mysqli_SELECT_db($conn, "dbbooks");

				$sql = "CREATE TABLE IF NOT EXISTS tbbooks (
				book_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				title VARCHAR(100) NOT NULL,
				genre VARCHAR(20) NOT NULL
				)";



				/*if (mysqli_query($conn, $sql))
				{
					echo "Table tbbooks created successfully<br>";
				}
				else
				{
					echo "Error creating tbbooks: <br>" . mysqli_error($conn);
				}*/



				$sql = "INSERT INTO tbbooks (title, genre)
				VALUES ('$_POST[title]',
					'$_POST[genre]')";
					
					$fname = $_POST['title'];
					$lname = $_POST['genre'];

						if (mysqli_query($conn, $sql))
						{
						echo "<div class='alert alert-success'>Book added ". $fname. " " . $lname .  "."."</div>";
						//header( 'Location: index.html');
						} 
						else
						{
						echo "<div class='alert alert-success'>Book not created ". $fname. " " . $lname .  "."."</div>";
						}




					$sql = "SELECT book_id, title, genre FROM tbbooks ORDER BY book_id DESC";
					$result = mysqli_query($conn, $sql);

					


					if (mysqli_num_rows($result) > 0)
					{

						echo "<h2> Books </h2>";
					// output data of each row

						echo "<div class='container'> <div class='list-group'>";
						while($row = mysqli_fetch_assoc($result))
    					{
							echo "
							 <a class='list-group-item'>
							
							   
							    <h4 class='list-group-item-heading'>". $row["title"]. "</h4>
							    <p class='list-group-item-text'>". $row["genre"]. "</p>
							    
							  </a>
							
							";
					
						
							
						
						}
						echo "</div></div>";
					}
					else
					{
						echo "<div class='alert alert-danger'> User does not exist. </div>";
					}










						mysqli_close($conn);

			


		?>

	</body>
	</html>