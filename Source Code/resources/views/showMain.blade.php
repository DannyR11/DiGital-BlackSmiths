<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Asentus" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="{{ app()->getLocale() }}">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title> Welcome </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="{{asset('css/layout.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>



    <style>
     
.navbar {
    color: #FFFFFF;
    background-color: maroon;
}

    </style>



    <?php
        /*session_start();
        
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
        

                            echo "<div style='font-weight: bold; font-size:20px' class='panel-heading'>".$row["username"]."
                            <label   style='padding-left:50px; font-size:6px'name='admin' id='admin' class='admin'  value='$admin'>" . $admin . "</label></div>";
                      

                        function debug_to_console( $data ) {
                            $output = $data;
                            if ( is_array( $output ) )
                                $output = implode( ',', $output);

                            echo "<script> console.log( 'Debug Objects: " . $output . "' ); </script>";
                        }


                        debug_to_console( $admin );

    */?>





    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="./login">
                                <img  width="300" src="img/ThutongLogo.png" alt="ThutongLogoSize">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                
                                <li class="nav-item"><a style="font-size: 20px" class="nav-item-child nav-item-hover active" href="./">Home</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./aboutUs">About</a></li>
                                 <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./modules">Subjects</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./vacancies">Jobs</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./contactUs">Contact Us</a></li>
                                <li class="nav-item"><a style="font-size: 20px" class="nav-item-child nav-item-hover" href="./profile">
                                    Admin: Dan Can</a></li>
                                <li class="nav-item"><a style="font-size: 10px" class="nav-item-child nav-item-hover" href="./ShowLogin/ShowLogin.html"> Logout </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" height="100px">
            <div class="container" height="100px">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" height="100px">
                <div class="item active" height="100px">
                    <img class="img-responsive" src="img/MainPics/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40" style="color:#D35400;">
                                <h1 class="carousel-title" style="color:#D35400;">Subjects</h1>
                                <p style="font-size: 26px; color:#D35400;">Thutong is a site that specializes in providing information learning tools to assist  <br/> in the education of everyday students </p>
                            </div>
                            <a href="./search" class="btn-theme btn-theme-sm btn-white-brd text-uppercase"> search </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/MainPics/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title" style="color:#8E44AD;">Topics and Lessons</h2>
                                <p style="font-size: 26px; color:#8E44AD;">A wide range of expert managed content is provided <br/> for a vast majority of subjects and grades</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">search</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/MainPics/03.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title" style="color:#21618C;">Quiz</h2>
                                <p style="font-size: 26px; color:#21618C;"> Try any of our quizes and get yourself graded <br/> to see how much you have understood of our lessons</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->







<?php
     /*                           

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
                    echo " <div class='bg-color-sky-light' data-auto-height='true'>
            <div class='content-lg container'>
                <div class='row row-space-1 margin-b-2'>
                    <div class='col-sm-4 sm-margin-b-2'>
                        <div class='wow fadeInLeft' data-wow-duration='.3' data-wow-delay='.3s'>
                            <div class='service' data-height='height'>
                                <div class='service-element;>
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

                                 echo "       </div></div> </div></div>";
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

                
    */?>



       

      
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer" style="background: url(img/MainPics/04.jpg);">
            <!-- Links -->
           
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">

                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Home</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">About</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Products</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Pricing</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Clients</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Careers</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Contact</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Terms</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white">Send Us A Note</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                        </div>
                    </div>
                    <!--// end row -->
               
            </div>
            <!-- End Links -->

         

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>