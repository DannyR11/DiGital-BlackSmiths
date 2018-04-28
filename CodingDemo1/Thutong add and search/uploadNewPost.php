<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<!--Insert your own name and surname-->
		<meta name="author" content="Daniel Rocha" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Profile Page</title> 
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/gif" href="favicon/animated_favicon1.gif">


<style>
		@font-face {
		   font-family: myFonta;
		   src: url(blackchancery/yonder.ttf);
		}

		legend, label {
		   font-family: myFonta;
		   color: white;
		}
</style>


		<script type="text/javascript">
			(function(){
			   setTimeout(function(){
			     window.location="Allposts.php";
			   }, 2000); /* 1000 = 1 second*/
			})();
		</script>


	

											
	</head>
	<body>
		
		<?php



							session_start();
					                $servername = "localhost";
					                $username = "root";
					                $password = "";
					                $dbname = "dbbooks";

        					$db = mysqli_connect($servername, $username, $password, $dbname);

							$output = '';


								mysqli_SELECT_db($db, 'dbbooks');

								
								// $us_id = $_SESSION["book_id"];
								// $us_Name = $_SESSION["username"];
								

								// $us_id = mysqli_real_escape_string($db, $us_id);
								// $us_Name = mysqli_real_escape_string($db, $us_Name);


								// echo "<a> $us_id...... </a>";
								// echo "<a> $us_Name...... </a>";
							

				$target_dir = "Uploads/";

				$picName = $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
				echo "<a>File image name - $picName.</a>";


				$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
				    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
					    if($check !== false) {
					        echo "<a>File is an image - " . $check["mime"] . ".</a>";
					        $uploadOk = 1;
					    } else {
					        echo "<a>File is not an image.</a>";
					        $uploadOk = 0;
					    }
				}
				// Check if file already exists
				if (file_exists($target_file)) {
				    echo "<a>Sorry, file already exists.</a>";
				    $uploadOk = 0;
				}
				// Check file size
				if ($_FILES["fileUpload"]["size"] > 500000) {
				    echo "<a>Sorry, your file is too large (500kb limit).</a>";
				    $uploadOk = 0;
				}
				// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					    echo "<a>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</a>";
					    $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					    echo "<a>Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
				} else {
					    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file))
					    {

					        echo "<a>The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded....................</a>";

					    }
					    else
					    {
					        echo "<a>Sorry, there was an error uploading your file.</a>";
					    }


							echo "<div class='alert alert-success'><a href='login.php'/>Uploaded Item Image.......... </div>";

							$book = $_POST["book"];

							$sql = "UPDATE tbbooks SET BookImage='$picName' WHERE book_id = '$book'";
											

							$query = mysqli_query($db,$sql);
			    				
							echo "<a> Image.</a>";


				}


		?>


		</body>
</html>