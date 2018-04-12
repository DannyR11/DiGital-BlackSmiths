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
            <script type="text/javascript" src="ImageScript.js"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
            <script type="text/javascript" src="jqcloud/jqcloud-1.0.4.js"></script>
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

#textbox {

height: 100px !important;

width: 100% !important;

font-size: 14px !important;

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

   <body <body background="Pictures/redasian.jpg">


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
                                   
                                </div></br></br></br>

                                


                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container -->
                        </nav>
                    </div>
                    <br/>
                    <br/>



                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class='Add'>
                                <fieldset style="color:red">
                                    <form action="" method="post" style="color:red;"> 
                                    <legend style="color:red; font-size:60px;"> 
                                    Friends Profile: </legend>
                                    <br/> 

                                    </form>
                                </fieldset>
                        </div>
                    </div>






<?php
            
        $tag = "0";  
           
        
    
            

            echo "<h1 style='color:red'> ---- " . $tag . " ---- </h1>";


                // Create connection
                $conn = $db;
                // Check connection
                if (!$conn)
                die("Connection failed: " . mysqli_connect_error());


                mysqli_SELECT_db($conn, $dbname);


                    $namer = $_POST["name"];
                    // $surname = $_POST["user"];
                    

                    $sql = "SELECT * FROM tbuser WHERE name LIKE '".$namer."'"; 
                    $result = mysqli_query($conn, $sql);

                    $count = 0;

                   

                   
                    // output data of each 
            if (mysqli_num_rows($result) > 0) 
            {
                   
                        while ( $row = mysqli_fetch_array( $result ) )
                        {   


                            $image = $row['userImage'];
                                                // $imagePro = $row['userImage'];

                            $reciever = $row["user_id"];
            
                            echo "<form action='removeFriend.php' method='GET'><div class='col-md-4 col-sm-4 col-xs-3' class='container' class='panel panel-default' id='col' style='background-color: rgba(255, 255, 285, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <div class='panel-body'>";
                            echo "<div style='font-weight: bold; font-size:20px' class='panel-heading'>
                            <input type='hidden'  class='admin'  value='$row[username]'> Username: " . $row["username"] . "</input>
                            </div>";
                            echo "<img class='img img-default' style='padding-left:20px' height='140'  src='$image' alt='Uploads/anon.jpg' />";
                            echo "</br></br> <p style='font-weight: bold; font-size:26px'>Name  -". " ". " ". " ". " <input name='name' value='$row[name]'" . $row["name"] . " </input></p>";
                            echo "<p>Surname  -". " ". " ". " ". " <input name='surname' value='$row[surname]' " . " </input></p>";
                            echo "<p>Birthday  -". " ". " ". " ". " <input type='date' name='birthday' value='$row[birthday]' " . " </input></p>";

                            echo "<p>Description    -". " ". " ". " ". " <input name='description' value='$row[description]' " . " </input></p>";
                            echo "<p>Email -". " ". " ". " ". " ". " <input type='email' name='email' value='$row[email]' " . " </input></p>";
                            echo "<p>Cell  -". " ". " ". " ". " ". " <input name='contactInfo' value='$row[contactInfo]' " . " </input></p>";
                            echo "<p>Password  -". " ". " ". " ". " ". " <input name='password' value='$row[password]' " . " </input></p>";
                            echo "<p>Work  -". " ". " ". " ". " ". " <input name='work' value='$row[work]' " . " </input></p>";
                            echo "<p>WishList  -". " ". " ". " ". " ". " <input name='wishList' value='$row[wishList]' " . " </input></p>";
                            echo "<p>Book List  -". " ". " ". " ". " ". " <input name='bookList' value='$row[bookList]' " . " </input></p>";
                            echo "<button type='submit' value='Remove friend'> Remove friend </button>";
                            echo "</div></div></form>";

                                        
                        }
                    
                }





            $sqls = "SELECT * FROM tbfriendship WHERE receiver = '" . $reciever . "' AND sender = '" . $_SESSION["user"] . "' OR receiver = '" . $_SESSION["user"] . "' AND sender = '" . $reciever . "'"; 
            $results = mysqli_query($conn, $sqls);

            $rows = mysqli_fetch_array( $results );

                echo "<form action='sendMessage.php' method='POST'><div class='col-md-4 col-sm-4 col-xs-3' class='container' class='panel panel-default' id='col' style='background-color: rgba(255, 255, 285, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <div class='panel-body'>";
                            echo "<div style='font-weight: bold; font-size:20px' class='panel-heading'>
                            <label style='padding-left:10px; font-size:20px' >Send Message</label>";
                           
                            
                            echo "<input name='sender'  type='hidden'  value='$_SESSION[user]'   " . " </input>
                                  <input name='receiver' type='hidden' value='$reciever' " . " </input>
                                  <p> Book List  -". " ". " ". " ". " ". " <textarea name='message' id='textbox' value='$rows[message]' > $rows[message] </textarea></p>";
                            echo "<button type='submit' value='Send'> send </button>";
                            echo "</div></div></form></div>";

                        mysqli_close( $conn ) ;
       

        ?>
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

                </fieldset>
                </form>
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
 


</script>

               



                    
                </div><!--/panel-body-->
                </div><!--/panel-->


    </body>
</html>