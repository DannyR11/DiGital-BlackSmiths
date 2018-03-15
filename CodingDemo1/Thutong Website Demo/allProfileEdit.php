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



                    


                    $sql = "SELECT * FROM tbuser"; 
                    $result = mysqli_query($conn, $sql);

                    $count = 0;


                   
                    // output data of each 

                   
                        while ( $row = mysqli_fetch_array( $result ) )
                        {   

                            $image = $row['userImage'];
                                                // $imagePro = $row['userImage'];
            
                            echo "<form action='updateProfile.php' method='POST'><div class='col-md-3 col-sm-6 col-xs-3' class='container' class='panel panel-default' id='col' style='background-color: rgba(255, 255, 285, 0.8); ' onmouseover='this.style.background='maroon'; onmouseout='this.style.background='rgba(255, 255, 285, 0.5)';'>
                            <div class='panel-body'>";
                            echo "<div style='font-weight: bold; font-size:20px' class='panel-heading'>".$row["username"]."
                            <label style='padding-left:50px; font-size:6px' name='admin' id='admin' class='admin'  value='$row[admin]'>" . $row["admin"] . "</label></div>";
                            echo "<img class='img img-default' style='padding-left:20px' height='140'  src='$image' alt='Uploads/anon.jpg' />";
                            echo "</br></br> <p>Name  -". " ". " ". " ". " <input name='name' value='$row[name]'". " </input></p>";
                            echo "<p>Surname  -". " ". " ". " ". " <input name='surname' value='$row[surname]' " . $row["surname"] . " </input></p>";
                            echo "<p>Birthday  -". " ". " ". " ". " <input type='date' name='birthday' value='$row[birthday]' " . " </input></p>";

                            echo "<p>Description    -". " ". " ". " ". " <input name='description' value='$row[description]' " . " </input></p>";
                            echo "<p>Email -". " ". " ". " ". " ". " <input type='email' name='email' value='$row[email]' " . " </input></p>";
                            echo "<p>Cell  -". " ". " ". " ". " ". " <input name='contactInfo' value='$row[contactInfo]' " . " </input></p>";
                            echo "<p>Password  -". " ". " ". " ". " ". " <input name='password' value='$row[password]' " . " </input></p>";
                            echo "<p>Work  -". " ". " ". " ". " ". " <input name='work' value='$row[work]' " . " </input></p>";
                            echo "<p>WishList  -". " ". " ". " ". " ". " <input name='wishList' value='$row[wishList]' " . " </input></p>";
                            echo "<p>Book List  -". " ". " ". " ". " ". " <input name='bookList' value='$row[bookList]' " . " </input></p>";
                            
                            echo "<button type='submit' value='Update profile'> Update profile </button></form>";
                            echo "<form action='deleteProfile.php' method='POST'> 
                            <button type='submit' value='$row[surname]' name='surname'> Delete profile </button> 
                            </form>";
                          
                            echo "</div></div>";
                                        
                        }
                    

              

               



                        mysqli_close( $conn ) ;
       

        ?>

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


                    
                </div><!--/panel-body-->
                </div><!--/panel-->


    </body>
</html>