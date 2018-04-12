<?php session_start();
?>
<!DOCTYPE>
	<html>
	
	<head>
		<meta charset="UTF-8" />
		<!--Insert your own name and surname-->
		<meta name="author" content="Daniel Rocha u14347980" />
		<title>Home Page</title> 
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
		<script type="text/javascript" src="jquery-ui.min.js"></script>
		<script type="text/javascript" src="ImageScript.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    	<script type="text/javascript" src="jqcloud/jqcloud-1.0.4.js"></script>
		<link rel="icon" type="image/gif" href="favicon/animated_favicon1.gif">
		<style>

		/* fonts */

div.jqcloud {
  font-family: "Helvetica", "Arial", sans-serif;
  font-size: 10px;
  line-height: normal;
}

div.jqcloud a {
  font-size: inherit;
  text-decoration: none;
}

div.jqcloud span.w10 { font-size: 550%; }
div.jqcloud span.w9 { font-size: 500%; }
div.jqcloud span.w8 { font-size: 450%; }
div.jqcloud span.w7 { font-size: 400%; }
div.jqcloud span.w6 { font-size: 350%; }
div.jqcloud span.w5 { font-size: 300%; }
div.jqcloud span.w4 { font-size: 250%; }
div.jqcloud span.w3 { font-size: 200%; }
div.jqcloud span.w2 { font-size: 150%; }
div.jqcloud span.w1 { font-size: 200%; }

/* colors */

div.jqcloud { color: #09f; }
div.jqcloud a { color: inherit; }
div.jqcloud a:hover { color: #0df; }
div.jqcloud a:hover { color: #ccffff; }
div.jqcloud span.w10 { color: #0cf; }
div.jqcloud span.w9 { color: #ffff1a; }
div.jqcloud span.w8 { color: #ff0000; }

div.jqcloud span.w7 { color: #9933ff; } 
div.jqcloud span.w6 { color: #3385ff; }
div.jqcloud span.w5 { color: #d633ff; }
div.jqcloud span.w4 { color: #66d9ff; }
div.jqcloud span.w3 { color: #ff0000; }
div.jqcloud span.w2 { color: #4747d1; }
div.jqcloud span.w1 { color: #00ffcc; }

/* layout */


 	.pop-out
    {
        transition: transform .5s;
    }

    .pop-out:hover
    {
        -ms-transform: scale(1.5, 1.5);
        -webkit-transform: scale(1.5, 1.5);
        transform: scale(1.5, 1.5);
    }

div.jqcloud {
  overflow: hidden;
  position: relative;
}

div.jqcloud span { padding: 0; }

	@font-face {
		   font-family: myFonta;
		   src: url(blackchancery/Aerospace.ttf);
		}

		legend, label {
		   font-family: myFonta;
		   color: #00008B;
		}

.navbar {
    color: #FFFFFF;
    background-color: maroon;
}







</style>
<script>
	$(document).ready(function(){
	    $("button").click(function(){
	        $.ajax({url: "demoo_test.txt", success: function(result){
	            $("#dunca").html(result);
	        }});
	    });
	});
</script>






<SCRIPT TYPE="text/javascript">  // Cloud
								 

      var word_array = [
          {text: "Biology", weight: 15, link: "Cloudsearch.php?tag=Biology"},
          {text: "Science", weight: 9, link: "Cloudsearch.php?tag=Science"},
          {text: "Geography", weight: 6, link: "Cloudsearch.php?tag=Geography"},
          {text: "Lo", weight: 7, link: "Cloudsearch.php?tag=Lo"},
          {text: "English", weight: 12, link: "Cloudsearch.php?tag=English"},
          {text: "Drama", weight: 5, link: "Cloudsearch.php?tag=Drama"},
          {text: "Technology", weight: 8, link: "Cloudsearch.php?tag=Technology"},
          {text: "Art", weight: 10, link: "Cloudsearch.php?tag=Art"},
          {text: "Culture", weight: 9, link: "Cloudsearch.php?tag=Culture"}
          // ...as many words as you want

          // https://www.w3schools.com/search.php?tag=Action
      ];

      $(function() {
        // When DOM is ready, select the container element and call the jQCloud method, passing the array of words as the first argument.
        $("#exampless").jQCloud(word_array);
        getText( document.getElementById('exampless') ); // 'My Text'
      });


											  function popup(mylink, windowname)
											  { 
												    if (! window.focus)return true;
												    var href;
												    if (typeof(mylink) == 'string') href=mylink;
												    else href=mylink.href; 
												    window.open(href, windowname, 'width=600,height=600,scrollbars=yes'); 
												    return false; 
	  											}
					
</SCRIPT>






</head>
	<body <body background="blur-backgrounds/blur-background03.jpg">




	<?php
		//session_start();
								$servername = "localhost";
				                $username = "root";
				                $password = "";
				                $dbname = "ThutongDB";

				       			$db = mysqli_connect($servername, $username, $password, $dbname);

		$sql = "SELECT * FROM UsersTB WHERE UserID=".$_SESSION["user"];

		$result = mysqli_query($db, $sql);

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		$surname = $row["UserSurname"];
		$admin = $row["UserLevel"];
		

							echo "<div style='font-weight: bold'; type='hidden font-size:20px' class='panel-heading'>".$row['username']."
                            <label  type='hidden' style='padding-left:50px; font-size:6px'name='admin' id='admin' class='admin'  value='$admin'>" . $admin . "</label></div>";
                           

	?>




				</br>


				<div class="container" >
						<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					        <div class="container">
					            <!-- Brand and toggle get grouped for better mobile display -->
					            <div class="navbar-header"  style="padding-right: 10%;" >

								
								<img src="logoo.png" style="width:44px;height:44px;">

					                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					                    <span class="sr-only">Toggle navigation</span>
					                    <span class="icon-bar"></span>
					                    <span class="icon-bar"></span>
					                    <span class="icon-bar"></span>
					                </button>
					                <a class="navbar-brand" href="#" style="font-size: 36px"> THUTONG </a>
					                 <a  style="font-size: 26px"> Learning platform </a>
					            </div>
					            <!-- Collect the nav links, forms, and other content for toggling -->

					            <div>

					                <ul  class="nav navbar-nav">

					                    <li style="background-color:maroon;">
					                        <a href="profile.php" style="font-size:20px;"> <?php echo " " . $admin . ": " .$_SESSION["username"]. " " .$surname. " ";  ?></a>
					                    </li>

					                    <li>
					                        
					                    </li>

					                    <li>
					                         <a href="usersfeed.php" style=" color:purple; font-size:20px;"> | Learning feed </a>
					                    </li>

					                    <li>
					                      
					                    </li>
					                </ul>
					                     
					                    
								
					                <ul style="background-color:maroon;" class="nav navbar-nav navbar-right" onclick="self.close()">
					                  <li ><a href="index.html" >
					                  	<span class="glyphicon glyphicon-log-out" id="colourr" >
					                  	</span> Logout </a>
					                  </li>
					                </ul>
					               
					            </div>

					            


					            <!-- /.navbar-collapse -->
					        </div>
					        <!-- /.container -->
					    </nav>
					</div>
				
				


	
		
       
		<div class="container" >
			
			<div class="col-md-6 col-sm-8 col-xs-8">

		
				
					<div class="panel panel-default" style="background-color: rgba(255, 255, 285, 0.5); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';">
					
				
						<img style="width: 100%; height: 3%;" src="CategoryPictures/imagethin.jpeg"/>

					
					</div><!--/panel-->

						<div class="panel panel-default" id="exampless" style="width: 100%; height: 350px; background-color: rgba(255, 255, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';">
					

					<div>
						<button style="background-color: Transparent; color:red" >
							Learning thats so good, you'd think you're lucid dreaming.
						</button>
 					</div>

		  	</div>
			</div> <!--/col1-->
				
			
				<div class="col-md-4 col-sm-8 col-xs-12">
					
					
						<img style="width: 100%; height: 400px;" src="LearningQuotesImages/Learning-Quotes-1-of-16.jpg"/>
					
				</div>


				<div class="col-md-2 col-sm-4 col-xs-12" >

						<div>
							<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Click here to </a>
							<a id="colour" id="clac" href="search.php" onclick="location.href='search.php';"> Search: </a>
						</div>

						<a style="color:#3399ff; font-size:20px; background-color: rgba(255, 255, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';"> Peel back the layers and find out who you really are by find ways to express yourself and expanding your mind with education. </a>
						<img style="width: 100%; height: 100px;" src="CategoryPictures/ipad.jpeg"/>
				</div>
					

				</div><!--/col2-->
			

	
    <div class="panel panel-primary" style="background-color: rgba(255, 255, 255, 0.6); " onmouseover="this.style.background='rgba(255, 0, 0, 0.3)';" onmouseout="this.style.background='rgba(255, 255, 255, 0.3)';"> 				
    	<a style="padding-left: 0.4cm; color:purple; font-size:40px;"> Recently added: </a> <button onclick="location.href='GategoryAddData.php';" type="hidden" id="authentic" > Admin Add Subjects (Show/Hide)</button> </div>
    </div>



					            <!-- Brand and toggle get grouped for better mobile display -->
					         
					




		<?php
    							

    		$sql = "SELECT * FROM SubjectTb ORDER BY SubArea DESC";
    		$result = mysqli_query($db, $sql);

				

			if (mysqli_num_rows($result) >= 0) 
    		{

    			// output data of each row						    
    			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
				{

							$subPic = $row['SubPic'];
							$subID = $row['SubID'];
							    				// $imagePro = $row['userImage'];
					echo " <div class='col-md-3 col-sm-6 col-xs-6' ><div class='panel panel-default' style='background-color: rgba(150, 255, 285, 0.3);'>
					";


					

					echo " <h1 style='font-size:50px;'> $row[SubArea]: </h1>

				
				    		<img  src='$subPic' width='100%' height='160px'/>
				  

					
				    		<p style='font-size:10px;'> $row[SubDescription] </p>
				    	

							";



						

					$sqlss = "SELECT * FROM GradeTb WHERE SubID = ".$subID;
    				$resultss = mysqli_query($db, $sqlss);

			
							if (mysqli_num_rows($resultss) >= 0) 
				    		{
				    			// output data of each row						    
				    			while ($rowss = mysqli_fetch_array($resultss, MYSQLI_ASSOC)) 
								{

									
									echo " 
												<a font-size:16px;'>* $rowss[GradeName] </a>
												<p style='font-size:10px;'> - > $rowss[GradeDescription] </p>
										  ";
								

								
				    			}

				    			 echo "       </div></div>";
				    		} 
				    		else 
				    		{
				    			echo "0 results";
				    		}

                   
							 			
    			}

    		} 
    		else 
    		{
    			echo "0 results";
    		}

				
    ?>







<script>


var element = document.getElementById("admin").innerHTML;
console.log(element);
// window.alert("element");
 //window.alert(element);



    window.onload = function()
    {

        console.log(element);
        console.log(element);
        console.log(element);

        

        if(element == "Admin") {
            document.getElementById('authentic').style.display = 'block'; 
        } else {
            document.getElementById('authentic').style.display = 'none';
        }
    }


</script>

<!-- FIXXXXXXX -->





		</div></div>
	</div>

	</body>
	</html>