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

<style>
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


<script type="text/javascript">
            (function(){
               setTimeout(function(){
                 window.location="Allposts.php";
               }, 8000); /* 1000 = 1 second*/
            })();
</script>


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



                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class='Add'>
                                <fieldset style="color:red">
                                    <form action="" method="post" style="color:red;"> 
                                    <legend style="color:red; font-size:60px;"> 
                                    User Profile: </legend>
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



                $title=$_POST["title"];
                $author=$_POST["author"];
                $description=$_POST["description"];
                $checkedIn=$_POST["checkedIn"];
                $genres=$_POST["genres"];
                $yearPub=$_POST["yearPub"];
               

                echo "<a> T:" . $title . " A: " . $author . " D: " . $description . " G: " . $genres . " Y:" .$yearPub. "</a>";




                $sql = "UPDATE tbbooks SET 
                title='". $title . "',
                author='" . $author . "',
                description='" . $description . "',
                checkedIn='" . $checkedIn . "',
                genres='" . $genres . "',
                yearPub='" . $yearPub . "' WHERE title = '" . $title . "'"; 







                $result = mysqli_query($conn, $sql);
                

                if (mysqli_query($conn, $sql))
                {

                    echo "Record updated successfully";

                }
                else
                {

                    echo "Error updating record: " . mysqli_error($conn);
                    
                }




                    


                    
                    

              

               



                        mysqli_close( $conn ) ;
       

        ?>

                </fieldset>
                </form>
                    
                    
                </div><!--/panel-body-->
                </div><!--/panel-->


    </body>
</html>