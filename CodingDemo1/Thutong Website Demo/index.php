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
div.jqcloud span.w1 { font-size: 100%; }

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
		   src: url(blackchancery/neuropol.ttf);
		}

		legend, label, a {
		   font-family: myFonta;
		   color: #00008B;
}

h1, h4, p, li {
   font-family: mySecondFont;
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

<SCRIPT TYPE="text/javascript">
								 

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
		session_start();
								$servername = "localhost";
				                $username = "root";
				                $password = "";
				                $dbname = "dbbooks";

				       		$db = mysqli_connect($servername, $username, $password, $dbname);

		$sql = "SELECT * FROM tbuser WHERE user_id=".$_SESSION["user"];

		$result = mysqli_query($db, $sql);

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		$surname = $row["surname"];
		$admin = $row["admin"];
		

							echo "<div style='font-weight: bold; type='hidden font-size:20px' class='panel-heading'>".$row["username"]."
                            <label type='hidden' style='padding-left:50px; font-size:6px' name='admin' id='admin' class='admin'  value='$row[admin]'>" . $row["admin"] . "</label></div>";
                           

	?>


				</br>
				<div class="container" >
						<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					        <div class="container">
					            <!-- Brand and toggle get grouped for better mobile display -->
					            <div class="navbar-header">

								
								<img src="logoo.png" style="width:44px; height:44px;" >
								<a href="profile.php" style="padding-left: 0.4cm; color:#3399ff; font-size:30px;"> User:  <?php echo " " .$_SESSION["username"]. " " .$surname. " ";  ?></a>
					                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					                    <span class="sr-only">Toggle navigation</span>
					                    <span class="icon-bar"></span>
					                    <span class="icon-bar"></span>
					                    <span class="icon-bar"></span>
					                </button>
					                <a href="usersfeed.php" style="padding-left: 2cm; color:purple; font-size:20px;"> Learning feed </a>
					                <a class="navbar-brand" href="#" id="colour" style="padding-left: 2cm;"> THUTONG </a>
					            </div>
					            <!-- Collect the nav links, forms, and other content for toggling -->

					            <div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1" >

					                <ul class="nav navbar-nav">
</br>
					               <br/>
					                   
					                </ul>
					                     
					                   
								
					                <ul class="nav navbar-nav navbar-right" onclick="self.close()">
					                  <li ><a style="color:aqua;" href="index.html" id="clacc" >
					                  	<span class="glyphicon glyphicon-log-out" id="colourr" >
					                  	</span> Logout</a>
					                  </li>
					                </ul>
					               
					            </div></br>
					               <br/>

					            


					            <!-- /.navbar-collapse -->
					        </div>
					        <!-- /.container -->
					    </nav>
					</div>
					<br/>
				


	
		
       
		<div class="container" >
			<div class="row">
				<div class="col-md-4 col-sm-8 col-xs-8">

					

		<!--  SAVE NEW CATEGORY TILE -->
		<!--  SAVE NEW CATEGORY TILE -->
		<!--  SAVE NEW CATEGORY TILE -->
		<!--  SAVE NEW CATEGORY TILE -->
		<!--  SAVE NEW CATEGORY TILE -->
		<!--  SAVE NEW CATEGORY TILE -->
    	<!--  SAVE NEW CATEGORY TILE -->
    	<!--  ADDITEM.PHP -->
    	<!--  ADDITEM.PHP then after SUBMIT add image to last item -->
    	<!--  DO THIS  -->
    	<!--  DO THIS  -->
    	<!--  DO THIS  -->
    	<!--  DO THIS  -->

				
					<div class="panel panel-default" id="col" style="background-color: rgba(255, 255, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';">
					<div class="panel-body"  id="cray">
				
					<form action="addItem.php" method="post" id="col" >
						<fieldset>
							<legend> Add a new Category ??</legend>
							<div class="form-group">
								<label for="title"> Category: </label>
								<input type="text" class="form-control" name="Category" id="Category" style="height: 4px" placeholder="Biology Grade 12"/>
							</div>
							<div class="form-group">
								<label for="author"> Explanation: </label>
								<input type="text" class="form-control" name="Bio" id="Bio" style="height: 4px" placeholder="About biology in grade 12"/>
							</div>
							<!-- <div class="form-group">
								<label for="bookDate">Year of publication:</label>
								<input type="date" class="form-control" name="bookDate" id="bookDate" style="height: 4px" />
							</div> -->
							<div class="form-group">
								<label for="Bdescription"> Description: </label>
								<input type="text" class="form-control" name="Bdescription" id="Bdescription" style="height: 4px" placeholder="P. F. hammilton"/>
							</div>
							<div class="form-group">
								<label for="genre"> Criteria of whats required: </label>
								<select class="form-control" name="Criteria" id="Criteria" >
								  <option value="SciFi"> Biology </option>
								  <option value="Adventure"> Science </option>
								  <option value="Drama"> Drama </option>
								  <option value="Mystery"> Art </option>
								  <option value="Romance"> History </option>
								  <option value="Horror"> Geography </option>
								  <option value="Art"> Art </option>
								  <option value="Fantasy"> Culture </option>
								</select>
							</div>




							<div class="form-group">
								<!-- SHOWS DRAGGED DROPPED IMAGE -->
								<!-- SHOWS DRAGGED DROPPED IMAGE -->
								<input type="submit" value="Submit Entry" class="btn btn-default" />   
								<img id="imgPrime" alt='Upload.jpg' src="" style="width: 40%; height: 10%; padding-left: 1cm;"  />						
							</div>
							
						</fieldset>
					</form>


							<!--  ADD IMAGE BY DRAGGED DROPPED IMAGE TO LAST SUBITED CATEGORY -->
							<!--  ADD IMAGE BY DRAGGED DROPPED IMAGE -->
							<!--  UPLOAD. PHP is for category IMAGE upload -->
    						<!--  UPLOAD. PHP is for category IMAGE upload -->
							<form 	action="upload.php" 	method="post" class="form-group" enctype="multipart/form-data">
								    
								<div id="userActions">
									<legend>Drag &amp; Drop (after sub)</legend>
									<input type="file" name="fileUpload" id="fileUpload" />
									<input type="submit" value="Upload Image" name="submit">
								</div>
								
							</form>
					
				</div><!--/panel-body-->
				</div><!--/panel-->


					<div id="dunca" >
						<button style="background-color: Transparent; color:red">
							Learning thats so good, you'd think you're lucid dreaming.
						</button>
 					</div>
		  		
				</div> <!--/col1-->
				
				<div class="col-md-2 col-sm-4 col-xs-12" id="woman">
					
					
						<a class="img2" class-"le" style="color:3399ff; font-size:16px; "> .......... .......... .......... .......... .......... .......... While my extensive experience as an editor has led me to a disdain .......... .......... .......... for flashbacks and flash forwards and all such tricksy gimmicks I believe that if you, .......... .......... .......... dear Reader, can extend your patience for just a moment, .......... .......... .......... you will find that there is a Method to this tale of Madness .......... .......... .......... .......... .......... .......... </a>
					
				</div>
				<div class="col-md-4 col-sm-8 col-xs-12" id="woman">
					
					
						<img style="width: 100%; height: 600px;" src="Pictures/plant.jpg"/>
					
				</div>


				<div class="col-md-2 col-sm-4 col-xs-12" >
						<div>
							<a style="color:red;" href="search.php" onclick="location.href='search.php?';"> Click here to </a>
							<a id="colour" id="clac" href="search.php" onclick="location.href='search.php';"> Search: </a>
						</div>

						<a class="img2" class-"le" style="color:#3399ff; font-size:20px; background-color: rgba(255, 255, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';"> Peel back the layers and find out who you really are ...... express yourself. </a>
						
						<!--|||||||||||||||||||||||||||||||||||||||||||-->
						<!--|||||||||||||||||||||||||||||||||||||||||||-->


						<div class="panel panel-default" id="exampless" style="width: 250px; height: 320px;" style="background-color: rgba(255, 255, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';">
					
						
						</div>
						<!--|||||||||||||||||||||||||||||||||||||||||||-->
						<!--|||||||||||||||||||||||||||||||||||||||||||-->


				</div>
				
				</div><!--/col2-->
			</div><!--/row-->
		</div><!--/container-->

	
    <div class="panel panel-primary" style="background-color: rgba(255, 0, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 0, 285, 0.3)';">
    	
    	<h1 style="color:black"> Global CATEGORY list ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: Descending order </h1>
    	
    	<div class='col-md-10'>
    				
    	<h1 style="color:white"> Recently added: </br></h1></div>




    	<!--  SHOW CATEGORY TILE -->
    	<!--  SHOW CATEGORY TILE -->
    	<!--  SHOW CATEGORY TILE -->
    	<!--  SHOW CATEGORY TILE -->
    	<!--  SHOW CATEGORY TILE -->
    	<!--  SHOW CATEGORY TILE -->
    	<!--  SHOW CATEGORY TILE -->
    	<!--  SHOW CATEGORY TILE -->
    	<!--  DO THIS  -->
    	<!--  DO THIS  -->
    	<!--  DO THIS  -->
    	<!--  DO THIS  -->



		<?php
    								
    		$sql = "SELECT * FROM tbbooks ORDER BY book_id DESC";
    		$result = $db->query($sql);


    		



    		if ($result->num_rows > 0) 
    		{
    			// output data of each row						    
    			while($row = $result->fetch_assoc()) 
				{

							$imagePr = $row['BookImage'];
							    				// $imagePro = $row['userImage'];
			
							echo "<form action='ratingPopup.php' method='GET'><div class='col-md-3 col-sm-6 col-xs-12' class='container' class='panel panel-default' id='col' style='background-color: rgba(0, 200, 200, 0.6); ' onmouseover='this.style.background='maroon';' onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <div class='panel-body'>";
                            echo "<input name='bookName' type='hidden' value='$row[title]'> " . $row["title"] . " </input><div style='font-weight: bold; font-size:20px'class='panel-heading' id='tail' class='tail' name='tail'>".$row["title"]."</div>";
                            echo "<p>Author  -" . " " . " " . " " . " " . $row["author"]. "</p>";
                            
                            echo "<p>Description    -" . " " . " " . " " . " " . $row["description"]. "</p>";
                            echo "<p>Genre -" . " " . " " . " " . " " . $row["genres"]. "</p>";
                            echo "<p style='color:blue'>Checked In [ " . " " . " " . " " . " " . $row["checkedIn"]. " ] :::: Date: " .  $row["DateChecked"] . "</p>";
                            $image = $row["BookImage"];


                            

                            echo "<img class='pop-out' width='240' height='260' src='$image' alt='empty.png' /></span>";
                            echo "<p> Year -". " ". " ". " ". " " . $row["yearPub"] . "</p> 
                            	 <p> <input type='submit' style='width:160px' value='Rate' class='btn btn-default' />  Rating    -". " ". " ". " ". " ". $row["rating"]. "</p>      ";
                            echo "<p class='panel-body'>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "</div></form>";
                            echo "<form action='wishlist.php' method='POST'>
                            <input name='title' value='$row[title]' type='hidden'> </input>
                            <input type='submit' style='width:280px' value='Add to Wishlist' class='btn btn-default' /></form></br></div> ";
                            
							 			
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
// window.alert(element);



    window.onload = function()
    {

        console.log(element);
        console.log(element);
        console.log(element);

        

        if(element == "True") {
            document.getElementById('authentic').style.display = 'block'; 
        } else {
            document.getElementById('authentic').style.display = 'none';
        }
    }


</script>


<button onclick="location.href='allPosts.php';" id="authentic" type="hidden"> Admin Adjust profiles </button>

		</div></div>
	</div>

	</body>
	</html>