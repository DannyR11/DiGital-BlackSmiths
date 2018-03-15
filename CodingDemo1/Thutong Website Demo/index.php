<?php

//session_start();
	// See all errors and warnings
	error_reporting(E_ALL);
	ini_set('error_reporting', E_ALL);

    //$email = $_REQUEST['email'];
	// You'll have to change these details for it to work on the server
	$mysqli = mysqli_connect("localhost", "u14347980_15", "zTQiFApr", "u14347980_15");

	$email = $_POST["email"];
	$pass = $_POST["pass"];

	$query = "SELECT * FROM tbusers WHERE email = '$email' AND password = '$pass'";

	$res = mysqli_query($mysqli, $query);

	//$res = mysql_real_escape_string($mysqli, $query); 

	//$SESSION['email'] = $email;



	mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html>
<head>
	<title> IMY 220 - Assignment 5 </title>
	<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="icon" type="image/gif" href="favicon/animated_favicon1.gif">

	<style>
		@font-face {
		   font-family: myFontassc;
		   src: url(scriptina/NI.ttf);
		}

		h1{
		   font-family: myFontassc;
		   color: #00008B;
		}
	</style>


</head>
<body background="Pictures/backround3.jpg">




	<div class="container" id="shitty">
						<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					        <div class="container"id="hea">
					            <!-- Brand and toggle get grouped for better mobile display -->
					            <div class="navbar-header">

								
								<img src="logoo.png" style="width:44px;height:44px;">

					                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					                    <span class="sr-only">Toggle navigation</span>
					                    <span class="icon-bar"></span>
					                    <span class="icon-bar"></span>
					                    <span class="icon-bar"></span>
					                </button>
					                <a class="navbar-brand" href="#" id="colour">Menu</a>
					            </div>
					            <!-- Collect the nav links, forms, and other content for toggling -->

					            <div class="collapse navbar-collapse" id="clac" id="bs-example-navbar-collapse-1">

					                <ul id="clac" class="nav navbar-nav">

					                    <li>

					                   			<a id="clac" ><?php echo $_SESSION["username"]; ?>. </a>

					                    </li>
					                </ul>
					                     
					                   
								
					                <ul class="nav navbar-nav navbar-right" onclick="self.close()">
					                  <li ><a href="index.html" id="clacc" >
					                  	<span class="glyphicon glyphicon-log-out" id="colourr" >
					                  	</span> Logout</a>
					                  </li>
					                </ul>
					               
					            </div>

					            


					            <!-- /.navbar-collapse -->
					        </div>
					        <!-- /.container -->
					    </nav>
					</div>
					<br/>
					<br/>




<h1> <img src="logoo.png" style="width:54px;height:54px;"> LUCID DREAMING <h1/>
	<div class="container"> 
		<div class="col-md-8 col-sm-8 col-xs-8">

		<p>
		<?php 
			if($row = mysqli_fetch_array($res))
			{

				echo "Name: " . $row['name'] . "<br/>";
				echo "Surname: " . $row['surname'] . "<br/>";
				echo "Email Address: " . $row['email'] . "<br/>";
				echo "Birthday: " . $row['birthday'] . "<br/>";
			
			}
			else
			{

				echo "You are not registered on this site";
			
			}
		?> <p/>
		<div/>
	</div>


	


	<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-8">
				
				<div class="panel panel-default" style="background-color: rgba(255, 255, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';">
				<div class="panel-body">
				
					<form action="index.php" method="post">
						<fieldset>
							<legend>Add New Book</legend>
							<div class="form-group">
								<label for="title">Title:</label>
								<input type="text" class="form-control" name="title" id="title" placeholder="Manhatten"/>
							</div>
							<div class="form-group">
								<label for="author">Author:</label>
								<input type="text" class="form-control" name="author" id="author" placeholder="Danny"/>
							</div>
							<div class="form-group">
								<label for="Author">Date added:</label>
								<input type="date" class="form-control" name="dater" id="dater"/>
							</div>
							<div class="form-group">
								<label for="genre">Genre:</label>
								<select class="form-control" name="genre" id="genre">
								  <option value="Fiction: SciFi">Fiction: SciFi</option>
								  <option value="Fiction: Adventure">Fiction: Adventure</option>
								  <option value="Fiction: Drama">Fiction: Drama</option>
								  <option value="Fantasy: Drama">Fantasy: Drama</option>
								  <option value="Biography: Tell all">Biography: Tell all</option>
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
		



</body>
</html>








<?php

			
			$title = $_POST['title'];
			$author = $_POST['author'];
			$dateAdded = $_POST['dater'];
			$genre = $_POST['genre'];

			

				$servername = "localhost";
				$username = "u14347980_15";
				$password = "zTQiFApr";
				$dbname = "u14347980_15";


				// Create connection
				$conn = mysqli_connect("localhost", "u14347980_15", "zTQiFApr", "u14347980_15");
				// Check connection
				if (!$conn)
				die("Connection failed: " . mysqli_connect_error());




				$sql = "CREATE DATABASE IF NOT EXISTS u14347980_15";

				/*if(mysqli_query($conn, $sql))
				{
					echo "Database created dbbooks successfully<br>";
				}
				else
				{
					echo "Error creating database.....: <br>" . mysqli_error($conn);
				}*/

				mysqli_SELECT_db($conn, "u14347980_15");

				$sql = "CREATE TABLE IF NOT EXISTS tbbooks (
				book_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				title VARCHAR(100) NOT NULL,
				author VARCHAR(100) NOT NULL,
				dateAdded date,
				genre VARCHAR(20) NOT NULL
				)";



				/*if (mysqli_query($conn, $sql))
				{
					echo "<br/> Table tbbooks created successfully<br>";
				}
				else
				{
					echo "Error creating tbbooks: <br>" . mysqli_error($conn);
				}*/



				$sql = "INSERT INTO tbbooks (title, author, dateAdded, genre)
				VALUES ('$_POST[title]',
					'$_POST[author]',
					'$_POST[dater]',
					'$_POST[genre]')";
					
					

					$ftitle = $_POST['title'];
					$fauthor = $_POST['author'];
					$fdateAdded = $_POST['dater'];
					$fgenre = $_POST['genre'];

						if (mysqli_query($conn, $sql))
						{
						echo "<div class='alert alert-success'>Book added.... <br/> Title: ". $ftitle. " <br/>Author: ". $fauthor. " <br/>Genre: " . $fgenre .  " <br/>Date added: ". $fdateAdded. ".</div>";
						//header( 'Location: index.html');
						} 
						else
						{
						echo "<div class='alert alert-info'> ....Books............................... ". $ftitle. " ". $fauthor. " " . $fgenre .  " ". $fdateAdded. ".</div>";
						}




					$sql = "SELECT book_id, title, author, dateAdded, genre FROM tbbooks ORDER BY book_id DESC";
					$result = mysqli_query($conn, $sql);

					


					if (mysqli_num_rows($result) > 0)
					{

						echo "<br/><h2> Book collection: </h2>";
					// output data of each row

						echo "<div class='panel panel-default' style='background-color: rgba(255, 255, 285, 0.3); ' onmouseover='this.style.background='maroon';' onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'> <div class='panel-body'>";
						while($row = mysqli_fetch_assoc($result))
    					{
							echo "
							 <a class='list-group-item'>
							
							   
							    <h1 class='list-group-item-heading'>". $row["title"]. "</h1>
							    <p class='list-group-item-text'>". $row["author"]. "</p>
							    <p class='list-group-item-text'>". $row["dateAdded"]. "</p>
							    <p class='list-group-item-text'>". $row["genre"]. "</p>
							    
							  </a><br/><br/>
							
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