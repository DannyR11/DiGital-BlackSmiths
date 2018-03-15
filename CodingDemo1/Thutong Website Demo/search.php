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


<SCRIPT TYPE="text/javascript">
                                 

      var word_array = [
          {text: "Sci-fi", weight: 15, link: "Cloudsearch.php?tag=SciFi"},
          {text: "Adventure", weight: 9, link: "Cloudsearch.php?tag=Adventure"},
          {text: "Drama", weight: 6, link: "Cloudsearch.php?tag=Drama"},
          {text: "Action", weight: 7, link: "Cloudsearch.php?tag=Action"},
          {text: "Mystery", weight: 12, link: "Cloudsearch.php?tag=Mystery"},
          {text: "Romance", weight: 5, link: "Cloudsearch.php?tag=Romance"},
          {text: "Horror", weight: 8, link: "Cloudsearch.php?tag=Horror"},
          {text: "Art", weight: 10, link: "Cloudsearch.php?tag=Art"},
          {text: "Fantasy", weight: 9, link: "Cloudsearch.php?tag=Fantasy"}
          // ...as many words as you want

          // https://www.w3schools.com/search.php?tag=Action
      ];

      $(function() {
        // When DOM is ready, select the container element and call the jQCloud method, passing the array of words as the first argument.
        $("#exampless").jQCloud(word_array);
        getText( document.getElementById('exampless') ); // 'My Text'
      });

                             
</SCRIPT>

    </head>

   <body <body background="Pictures/water.jpg">


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



                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class='Add'>
                                <fieldset style="color:red">
                                    <form action="" method="post" style="color:red;"> 
                                    <legend style="color:red; font-size:60px;"> 
                                    Search: </legend><input type="text" name="term" style="width: 160px"/> <br/>  


                                    <div class="form-group">
                                    <label for="genre" style="color:aqua; font-size:30px;"> Search by: </label>
                                    <select class="form-control" name="genres" id="genres" style="width: 160px" >
                                          <option value="name"> name </option>
                                          <option value="username"> username </option>
                                          <option value="surname"> surname </option>
                                          <option value="email"> email </option>
                                          <option value="genres"> genres </option>
                                          <option value="checkedIn"> checkedIn </option>
                                    </select>


                                    <input type="submit" value="Submit" />  
                                    </form>
                                </fieldset>
                        </div> <div class="panel panel-default" id="exampless" style="width: 150px; height: 150px;" style="background-color: rgba(255, 255, 285, 0.3); " onmouseover="this.style.background='maroon';" onmouseout="this.style.background='rgba(255, 255, 285, 0.5)';">
                    
                    </div></div>



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


                if ( $tag == "name" )
                {

                    echo "<a> NAME </a>";


                    $sql = "SELECT * FROM tbuser WHERE name LIKE '%".$term."%' AND name != '" . $_SESSION["username"] . "'"; 
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


                if ( $tag == "surname")
                {

                    echo "<a> NAME </a>";


                    $sql = "SELECT * FROM tbuser WHERE surname LIKE '%".$term."%' AND name != '" . $_SESSION["username"] . "'"; 
                    $result = mysqli_query($conn, $sql);

                    $count = 0;


                   
                    // output data of each row
                        while ( $row = mysqli_fetch_array( $result ) )
                        {   

                            $imagePr = $row['userImage'];
                                                // $imagePro = $row['userImage'];
            
                            echo "<form action='ratingPopup.php' method='POST'><div class='col-md-3 col-sm-3 col-xs-3' class='container' class='panel panel-default' id='col' style='background-color: rgba(255, 255, 0, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
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



                if ( $tag == "username")
                {

                    echo "<a> NAME </a>";


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


                if ( $tag == "email")
                {

                    echo "<a> NAME </a>";


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


                if ( $tag == "genres")
                {

                    // echo "<a> NAME </a>";


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