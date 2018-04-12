<?php session_start();
?><!DOCTYPE>
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

         nav {
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
        

                            echo "<div style='font-weight: bold; type='hidden font-size:20px' class='panel-heading'>".$row["UserName"]."
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
                                            <a href="usersfeed.php" style=" color:purple; font-size:20px;"> | Search </a>
                                        </li>

                                        <li>
                                           
                                        </li>
                                    </ul>


                                    <ul  class="nav navbar-nav">
                                        <li style="background-color:maroon;">
                                            <a href="showMainCategory.php" style=" color:grey; font-size:20px;"> | Main </a>    
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
                
                




                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="panel panel-default" style="background-color: rgba(255, 255, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';">
                                <fieldset style="color:red">
                                    <form action="" method="post" style="color:purple;"> 
                                    <legend style="color:red; font-size:60px;"> 
                                    Search: </legend><input type="text" name="term" style="width: 200px"/> <br/>  


                                    <div class="form-group">
                                    <label for="SubjectArea" style="color:purple; font-size:30px;"> Search by: </label>
                                    <select class="form-control" name="genres" id="genres" style="width: 200px" >
                                          <option value="Subject Area"> Subject Area </option>
                                          <option value="Grade"> Grade </option>
                                          <option value="Criteria"> Lesson </option>
                                          <option value="Criteria"> Topic </option>
                                          <option value="Criteria"> Quiz </option>
                                    </select>

                                </br>


                                    <input type="submit" style="width: 200px" value="Search" />  

                                    </form>
                                </fieldset>
                      
                </div>
            </div>

             <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="panel panel-default" id="exampless" style="width: 200px; height: 150px; background-color: rgba(255, 255, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';">
                </div>
                <img style="width: 198px; height: 104px; padding-top: 6px;" src="CategoryPictures/ipad.jpeg"/>
            </div> 


<?php
            
        $tag = "0";  
           
        
    if (!empty($_REQUEST['genres'])) 
    {

            $tag = $_REQUEST['genres'];
            $term = $_REQUEST['term'];

            echo "<h1 style='color:red'> ---- " . $tag . " ---- </h1>";


                // Create connection
                $conn = $db;
                // Check connection
                if (!$conn)
                die("Connection failed: " . mysqli_connect_error());


                mysqli_SELECT_db($conn, $dbname);


                if ( $tag == "Subject Area" )
                {

                    echo "<a> SUBJECT </a>";


                    $sql = "SELECT * FROM subjecttb WHERE SubArea LIKE '%".$term."%'"; 
                    $result = mysqli_query($conn, $sql);

                    $count = 0;


                   
                    // output data of each row
                        while ( $row = mysqli_fetch_array( $result ) )
                        {   
							
                            $imagePr = $row['SubPic'];
               
            
                            echo "<form action='ratingPopup.php' method='POST'><div class='col-md-3 col-sm-3 col-xs-3' class='container' class='panel panel-default' id='col' style='background-color: rgba(0, 255, 285, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <div class='panel-body'>";
                            echo "<div style='font-weight: bold; font-size:20px'class='panel-heading' id='tail' class='tail' name='tail'>".$row["SubArea"]."</div>";
							echo "<img class='img img-default' height='140'  src='$imagePr' alt='Uploads/anon.jpg' /></form>";
                            echo "<p>Description  -". " ". " ". " ". " ". $row["SubDescription"]. "</p>";
							$subID = $row['SubID'];
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
                            /*echo "<p>Surname  -". " ". " ". " ". " ". $row["surname"]. "</p>";
                            
                            echo "<p>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "<p>Work    -". " ". " ". " ". " ". $row["work"]. "</p>";
                            echo "<p>Email -". " ". " ". " ". " ". $row["email"]. "</p>";
                            $image = $row["userImage"];*/
                            
                            /*echo "<form action='friendReq.php' method='POST'>
                            <input type='hidden' name='user' value='$row[user_id]'>" . $row["user_id"] . "</input> </br>
                            <button type='submit' value='Update profile'> Send Friend Request </button>
                            </form>";
                          
                            echo "</div></div>";*/
                                        
                        }

                }


                if ( $tag == "Grade")
                {

                    echo "<a> GRADE </a>";


                    $sql = "SELECT * FROM gradetb WHERE GradeName LIKE '%".$term."%'"; 
                    $result = mysqli_query($conn, $sql);

                    $count = 0;


                   
                    // output data of each row
                        while ( $row = mysqli_fetch_array( $result ) )
                        {   

                            //$imagePr = $row['userImage'];
                                                // $imagePro = $row['userImage'];
            
							echo "<form action='ratingPopup.php' method='POST'><div class='col-md-3 col-sm-3 col-xs-3' class='container' class='panel panel-default' id='col' style='background-color: rgba(255, 255, 0, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <div class='panel-body'>";
							$subj = $row["SubID"];
							$sql2 = "SELECT * FROM subjecttb WHERE SubID = " .$subj;
							$resultss = mysqli_query($db, $sql2);

			
							if (mysqli_num_rows($resultss) >= 0) 
				    		{
				    			// output data of each row						    
				    			while ($rowss = mysqli_fetch_array($resultss, MYSQLI_ASSOC)) 
								{
									echo "<div style='font-weight: bold; font-size:20px'class='panel-heading' id='tail' class='tail' name='tail'>".$rowss["SubArea"]."</div>";
									$imagePr = $rowss["SubPic"];
									echo "<img class='img img-default' height='140'  src='$imagePr' alt='Uploads/anon.jpg' /></form>";
									echo "<p>Description  -". " ". " ". " ". " ". $rowss["SubDescription"]. "</p>";
								}
							//}
								
				    		} 
							echo " 
												<a font-size:16px;'>* $row[GradeName] </a>
												<p style='font-size:10px;'> - > $row[GradeDescription] </p>
										  ";
				    			 echo "       </div></div>";
                            /*echo "<p>Name  -". " ". " ". " ". " ". $row["name"]. "</p>";
                            echo "<p>Surname  -". " ". " ". " ". " ". $row["surname"]. "</p>";
                            
                            echo "<p>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "<p>Work    -". " ". " ". " ". " ". $row["work"]. "</p>";
                            echo "<p>Email -". " ". " ". " ". " ". $row["email"]. "</p>";
                            $image = $row["userImage"];

                            echo "<img class='img img-default' height='140'  src='$image' alt='Uploads/anon.jpg' /></form>";
                            
                            echo "<form action='friendReq.php' method='POST'>
                            <input type='hidden' name='user' value='$row[user_id]'>" . $row["user_id"] . "</input> </br>
                            <button type='submit' value='Update profile'> Send Friend Request </button>
                            </form>";
                          
                            echo "</div></div>";*/
                                        
                        }

                }



                if ( $tag == "Lesson")
                {

                    echo "<a> LESSONS </a>";


                    $sql = "SELECT * FROM tbuser WHERE username LIKE '%".$term."%' AND name != '" . $_SESSION["username"] . "'"; 
                    $result = mysqli_query($conn, $sql);

                    $count = 0;


                   
                    // output data of each row
                        while ( $row = mysqli_fetch_array( $result ) )
                        {   

                            $imagePr = $row['userImage'];
                                                // $imagePro = $row['userImage'];
            
                            echo "<form action='ratingPopup.php' method='POST'><div class='col-md-3 col-sm-3 col-xs-3' class='container' class='panel panel-default' id='col' style='background-color: rgba(255, 0, 285, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <div class='panel-body'>";
                            echo "<div style='font-weight: bold; font-size:20px'class='panel-heading' id='tail' class='tail' name='tail'>".$row["username"]."</div>";
                            echo "<p>Name  -". " ". " ". " ". " ". $row["name"]. "</p>";
                            echo "<p>Surname  -". " ". " ". " ". " ". $row["surname"]. "</p>";
                            
                            echo "<p>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "<p>Work    -". " ". " ". " ". " ". $row["work"]. "</p>";
                            echo "<p>Email -". " ". " ". " ". " ". $row["email"]. "</p>";
                            $image = $row["userImage"];

                            echo "<img class='img img-default' height='140'  src='$image' alt='Uploads/anon.jpg' /></form>";
                            
                            echo "<form action='friendReq.php' method='POST'>
                            <input type='hidden' name='user' value='$row[user_id]'>" . $row["user_id"] . "</input> </br>
                            <button type='submit' value='Update profile'> Send Friend Request </button>
                            </form>";
                          
                            echo "</div></div>";
                                        
                        }

                }


                if ( $tag == "Topic")
                {

                    echo "<a> TOPICS </a>";


                    $sql = "SELECT * FROM tbuser WHERE email LIKE '%".$term."%'"; 
                    $result = mysqli_query($conn, $sql);

                    $count = 0;


                   
                    // output data of each row
                        while ( $row = mysqli_fetch_array( $result ) )
                        {   

                            $imagePr = $row['userImage'];
                                                // $imagePro = $row['userImage'];
            
                            echo "<form action='ratingPopup.php' method='POST'><div class='col-md-3 col-sm-3 col-xs-3' class='container' class='panel panel-default' id='col' style='background-color: rgba(0, 255, 285, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <div class='panel-body'>";
                            echo "<div style='font-weight: bold; font-size:20px'class='panel-heading' id='tail' class='tail' name='tail'>".$row["username"]."</div>";
                            echo "<p>Name  -". " ". " ". " ". " ". $row["name"]. "</p>";
                            echo "<p>Surname  -". " ". " ". " ". " ". $row["surname"]. "</p>";
                            
                            echo "<p>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "<p>Work    -". " ". " ". " ". " ". $row["work"]. "</p>";
                            echo "<p>Email -". " ". " ". " ". " ". $row["email"]. "</p>";
                            $image = $row["userImage"];

                            echo "<img class='img img-default' height='140'  src='$image' alt='Uploads/anon.jpg' /></form>";
                            
                            echo "<form action='friendReq.php' method='POST'>
                            <input type='hidden' name='user' value='$row[user_id]'>" . $row["user_id"] . "</input> </br>
                            <button type='submit' value='Update profile'> Send Friend Request </button>
                            </form>";
                          
                            echo "</div></div>";
                                        
                        }

                }


                if ( $tag == "Quiz")
                {

                    // echo "<a> Quizzes </a>";


                    $sql = "SELECT * FROM tbbooks WHERE genres LIKE '%".$term."%'"; 
                    $result = mysqli_query($conn, $sql);

                    $count = 0;


                   
                    // output data of each row
                        while ( $row = mysqli_fetch_array( $result ) )
                        {   

                            $imagePr = $row['BookImage'];
                                                // $imagePro = $row['userImage'];
            
                            echo "<div class='container' class='panel panel-default' class='col-md-3 col-sm-3 col-xs-3' id='col' style='background-color: rgba(255, 0, 285, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <form action='ratingPopup.php' method='GET'><div   >
                            <div class='panel-body'>";
                            echo "<div style='font-weight: bold; font-size:20px'class='panel-heading' id='tail' class='tail' name='tail'>".$row["title"]."</div>";
                            echo "<input name='bookName' type='hidden' value='$row[title]'> " . $row["title"] . " </input><p>Author  -". " ". " ". " ". " ". $row["author"]. "</p>";
                            
                            echo "<p>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "<p>Genre -". " ". " ". " ". " ". $row["genres"]. "</p>";
                            
                            $image = $row["BookImage"];


                            

                            echo "<img class='img img-default' width='240' height='260'  src='$image' alt='Uploads/anon.jpg' /></span>";
                            echo "<p>Year -". " ". " ". " ". " " . $row["yearPub"] . "</p> 
                                 <p> <input type='submit' value='Rate' class='btn btn-default' />  Rating    -". " ". " ". " ". " ". $row["rating"]. "</p>      ";
                            echo "<p class='panel-body'>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "</div></div></form>";
                            echo "<form action='checkedIn.php' method='POST'>
                            <input name='title' value='$row[title]' type='hidden'> </input>
                            <input name='review' value='$row[review]' > Review </input>
                            <a> Checked In [<input name='check' value='$row[checkedIn]' type='hidden'> " . $row["checkedIn"] . " ]   :::: Date [ " . $row["DateChecked"] . " ]</input></a></br>
                            <input type='submit' value='Check Book' class='btn btn-default' /></form>";

                            echo "<form action='wishlist.php' method='POST'>
                            <input name='title' value='$row[title]' type='hidden'> </input>
                            <input type='submit' value='Add to Wishlist' class='btn btn-default' /></form></br></div> </br></br>";
                        
                        }

                }


                if ( $tag == "checkedIn")
                {

                    echo "<a> NAME </a>";

                    $chck = "yes";


                    $sql = "SELECT * FROM tbbooks WHERE checkedIn = '" . $chck . "'"; 
                    $result = mysqli_query($conn, $sql);

                    $count = 0;


                   
                    // output data of each row
                        while ( $row = mysqli_fetch_array( $result ) )
                        {   

                            $imagePr = $row['BookImage'];
                                                // $imagePro = $row['userImage'];
            
                            echo "<div class='container' class='panel panel-default' class='col-md-3 col-sm-3 col-xs-3' id='col' style='background-color: rgba(255, 0, 285, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <form action='ratingPopup.php' method='GET'><div   >
                            <div class='panel-body'>";
                            echo "<div style='font-weight: bold; font-size:20px'class='panel-heading' id='tail' class='tail' name='tail'>".$row["title"]."</div>";
                            echo "<input name='bookName' type='hidden' value='$row[title]'> " . $row["title"] . " </input><p>Author  -". " ". " ". " ". " ". $row["author"]. "</p>";
                            
                            echo "<p>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "<p>Genre -". " ". " ". " ". " ". $row["genres"]. "</p>";
                            
                            $image = $row["BookImage"];


                            

                            echo "<img class='img img-default' width='240' height='260'  src='$image' alt='Uploads/anon.jpg' /></span>";
                            echo "<p>Year -". " ". " ". " ". " " . $row["yearPub"] . "</p> 
                                 <p> <input type='submit' value='Rate' class='btn btn-default' />  Rating    -". " ". " ". " ". " ". $row["rating"]. "</p>      ";
                            echo "<p class='panel-body'>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "</div></div></form>";
                            echo "<form action='checkedIn.php' method='POST'>
                            <input name='title' value='$row[title]' type='hidden'> </input>
                            <input name='review' value='$row[review]' > Review </input>
                            <a> Checked In [<input name='check' value='$row[checkedIn]' type='hidden'> " . $row["checkedIn"] . " ]   :::: Date [ " . $row["DateChecked"] . " ]</input></a></br>
                            <input type='submit' value='Check Book' class='btn btn-default' /></form>";

                            echo "<form action='wishlist.php' method='POST'>
                            <input name='title' value='$row[title]' type='hidden'> </input>
                            <input type='submit' value='Add to Wishlist' class='btn btn-default' /></form></br></div> </br></br>";
                                        
                        }

                }






                   



                        

                        mysqli_close( $conn ) ;
        }

        ?>

                </fieldset>
                </form>
                    
                    
                </div><!--/panel-body-->
                </div><!--/panel-->


    </body>
</html>