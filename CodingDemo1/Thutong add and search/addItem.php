<?php
       session_start();
	   ?>
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
			(function()
			{
			   setTimeout(function()
			   {
			     window.location="showMainCategory.php";
			   }, 3000); /* 1000 = 1 second*/
			})();
		</script>
		
</head>
<body>
<?php

	$subj = $_POST["SubjectArea"];
	$desc = $_POST["Description"];
	$grade = $_POST["SubjectGrade"];
	$gradeDesc = $_POST["Bdescription"];
	
	$conn = mysqli_connect("localhost", "root", "", "thutongdb");
	if(!$conn)
		die("Connection failed: ". mysqli_connect_error());
	
	//$pass1 = $_POST["pass1"];
	//$pass2 = $_POST["pass2"];
	
	 $sql = "SELECT * FROM subjecttb WHERE SubArea = '$subj'"; 
	 $result = mysqli_query($conn, $sql);
			//echo($result);
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result)) 
				{
					$SubID = $row["SubID"];
					//echo($SubID);
				}
				
				$query = "INSERT INTO gradetb (SubID, 
								GradeName, 
								GradeDescription)
							VALUES
							('$SubID', 
								'$grade', 
								'$gradeDesc' 
								)";
					$res = mysqli_query($conn, $query) == TRUE;
					echo $res ? "The grade has been added</div></br></br>" : "The grade could not be added</div></br></br>";
	 }
	 else
	 {
		$query1 = "INSERT INTO subjecttb (SubArea, SubDescription) VALUES('$subj','$desc')";
					$res = mysqli_query($conn, $query1) == TRUE;
					echo $res ? "The subject has been added</div></br></br>" : "The subject could not be added</div></br></br>";
					
					
					$sql = "SELECT * FROM subjecttb WHERE SubArea = '$subj'"; 
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_assoc($result)) 
						{
							$SubID = $row["SubID"];
					//echo($SubID);
						}
					}	
					
		$query2 = "INSERT INTO gradetb (SubID, 
					GradeName, 
					GradeDescription)
				VALUES
				('$SubID', '$grade', '$gradeDesc')";
					$ress = mysqli_query($conn, $query2) == TRUE;
					echo $ress ? "The grade has been added</div></br></br>" : "The grade could not be added</div></br></br>";
			}
			//echo 'We no get";
		
		
 
?>
		</body>
</html>