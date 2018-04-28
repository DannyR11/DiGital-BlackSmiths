<?php session_start();
?>
<!DOCTYPE>
	<html>
	
	<head>
		<meta charset="UTF-8" />
		<!--Insert your own name and surname-->
		<meta name="author" content="Daniel Rocha u14347980" />
		<title>Lesson Page</title> 
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

					                    <li style="background-color:maroon;">
					                         <a href="showMainCategory.php" style=" font-size:20px;">Learning feed </a>
					                    </li>

					                   <li >
					                      	 <a href="lesson.php" style=" color:purple;  font-size:20px;">| Lessons </a>
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
			
			<div class="col-md-10 col-sm-8 col-xs-8">

		
				
					<div style="padding-left: 50px; padding-right: 50px;" class="panel panel-default" style="background-color: rgba(255, 255, 285, 0.5); "  onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';">
					
				
						<div style="background-color: rgba(10, 10, 10, 0.5); ">
							<h1 style="font-size:20px;">Subject -> Science <h1  style="font-size:15px;"> Grade-> 12 </h1><h2 style="font-size:10px;"> Topic -> Chemistry<h3 style="font-size:15px;"> Lesson -> Displacemenet Reactions 1 of 2</h3></h2></h1>
						</div>
						 </br>

					<h4> Description </h4>
					<p> The most important, and most exciting, thing about science and scientific theories is that they are not fixed. Hypotheses are formed and carefully tested, leading to scientific theories that explain those observations and predict results. The results are not made to fit the hypotheses. If new information comes to light with the use of better equipment, or the results of other experiments, this new information is used to improve and expand current theories. If a theory is found to have been incorrect it is changed to fit this new information. The data should never be made to fit the theory, if the data does not fit the theory then the theory is reworked or discarded. Although this changing of opinion is often taken for inconsistency, it is this very willingness to adapt that makes science useful, and allows new discoveries to be made. </p></br>

					<h4> Video </h4>
					<iframe width="420" height="315" align="middle"
						src="https://www.youtube.com/embed/LzX3mQMx7Po?autoplay=0">
					</iframe> </br> </br>


					<h4> How to understand Displacemenet Reaction </h4>
					<p> The theory of gravity has been slowly developing since the beginning of the 16th century. Galileo Galilei is credited with some of the earliest work. At the time it was widely believed that heavier objects accelerated faster toward the earth than light objects did. Galileo had a hypothesis that this was not true, and performed experiments to prove this.

Galileo's work allowed Sir Isaac Newton to hypothesise not only a theory of gravity on earth, but that gravity is what held the planets in their orbits. Newton's theory was used by John Couch Adams and Urbain Le Verrier to predict the planet Neptune in the solar system and this prediction was proved experimentally when Neptune was discovered by Johann Gottfried Galle. </p></br>


		
					<h2> Lesson Resources </h2>


					<h4> PDF -> Lesson downloads </h4>
					<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Types_of_reactions.pdf </a></br>
					<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Number_of_reactions.pdf </a></br>
					<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Calculating_of_reactions.pdf </a></br>
					<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Displacement.pdf </a></br>

					<h4> PDF -> Excersices </h4>
					<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Ex1_Types_of_reactions.pdf </a></br>
					<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Ex2_TNumber_of_reactions.pdf </a></br>
					<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Ex3_TCalculating_of_reactions.pdf </a></br>
					<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Ex4_TDisplacement.pdf </a></br>


					</br>

					</div><!--/panel-->




					
			</div> <!--/col1-->
				
			
				


				<div class="col-md-2 col-sm-4 col-xs-12" >

						<div>
							<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Click here to </a>
							<a id="colour" id="clac" href="search.php" onclick="location.href='search.php';"> Search: </a>
						</div>

						<a style="color:#3399ff; font-size:20px; background-color: rgba(255, 255, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';"> Peel back the layers and find out who you really are by find ways to express yourself and expanding your mind with education. </a>
						<img style="width: 100%; height: 100px;" src="CategoryPictures/ipad.jpeg"/>
				</div>
					

				</div><!--/col2-->
			

	
    









		</div>
	</div>
	</div>

	</body>
	</html>