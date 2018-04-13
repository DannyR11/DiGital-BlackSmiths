<!DOCTYPE html>
<html lang="en">
    <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="author" content="Daniel Rocha u14347980">

            <title>Search</title>
            <link rel="shortcut icon" href="css/favicon.ico" type="image/x-icon">
            
           
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="icon" type="image/gif" href="favicon/animated_favicon1.gif">
            <link href="css/home-style.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="style.css">
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>


                                            <SCRIPT TYPE="text/javascript">
                                              function popup(mylink, windowname) { 
                                                if (! window.focus)return true;
                                                var href;
                                                if (typeof(mylink) == 'string') href=mylink;
                                                else href=mylink.href; 
                                                window.open(href, windowname, 'width=400,height=250,scrollbars=yes'); 
                                                return false; 
                                              }
                                            </SCRIPT>


    </head>

   <body <body background="Pictures/grey.jpg">


<?php
        session_start();
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "dbbooks";

                            $db = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM tbUser WHERE user_id=".$_SESSION["user"];

        $result = mysqli_query($db, $sql);

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $surname = $row["surname"];
        

    ?>


         <div class="container" >
                        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">

                                
                                <img src="logoo.png" style="width:44px; height:44px;" >
                                <a href="profile.php" style="padding-left: 0.4cm; color:#3399ff; font-size:30px;"> User: : : <?php echo " " .$_SESSION["username"]. " " .$surname. " ";  ?></a>

                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="main.php" id="colour" style="padding-left: 2cm;"> LUCID </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->

                                <div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1" >

                                    <ul class="nav navbar-nav">

                                       
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


<?php
            
            
            $pass = "1212";
            $tag = $_GET["tag"];


            echo "<h1 style='color:red'> ---- " . $tag . " ---- </h1>";


                // Create connection
                $conn = $db;
                // Check connection
                if (!$conn)
                die("Connection failed: " . mysqli_connect_error());


                mysqli_SELECT_db($conn, $dbname);


                    $sql = "SELECT * FROM tbbooks WHERE genres LIKE '%".$tag."%'"; 
                    $result = mysqli_query($conn, $sql);

                    $count = 0;


                   
                    // output data of each row
                        while ( $row = mysqli_fetch_array( $result ) )
                        {   

                            $imagePr = $row['BookImage'];
                                                // $imagePro = $row['userImage'];
            
                            echo "<form action='ratingPopup.php' method='POST'><div class='col-md-3 col-sm-3 col-xs-3' class='container' class='panel panel-default' id='col' style='background-color: rgba(255, 255, 285, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <div class='panel-body'>";
                            echo "<div style='font-weight: bold; font-size:20px'class='panel-heading' id='tail' class='tail' name='tail'>".$row["title"]."</div>";
                            echo "<p>Author  -". " ". " ". " ". " ". $row["author"]. "</p>";
                            
                            echo "<p>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "<p>Genre -". " ". " ". " ". " ". $row["genres"]. "</p>";
                            $image = $row["BookImage"];


                            

                            echo "<img class='img img-default' width='240' height='260'  src='$image' alt='Uploads/anon.jpg' /></span>";
                            echo "<p>Year -". " ". " ". " ". " " . $row["yearPub"] . "</p> 
                                 <p> <input type='submit' value='Rate' class='btn btn-default' />  Rating    -". " ". " ". " ". " ". $row["rating"]. "</p>      ";
                            echo "<p class='panel-body'>Description    -". " ". " ". " ". " ". $row["description"]. "</p>";
                            echo "</div></div></form>";
                                        
                        }
                        

                        mysqli_close( $conn ) ;


        ?>

    			</fieldset>
				</form>
					
					
				</div><!--/panel-body-->
				</div><!--/panel-->


    </body>
</html>