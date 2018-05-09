<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title> Login </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

       @extends('layout.app')
    </head>
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
                            <a class="logo-wrap" href="index.html">
                                <img  width="300" src="img/ThutongLogo.png" alt="ThutongLogoSize">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                
                                <li class="nav-item"><a style="font-size: 20px" class="nav-item-child nav-item-hover active" href="./homeP">Home</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./about">About</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./subjectList">Subjects</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./showAllJobs">Jobs</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./contact">Contact Us</a></li>
                                <li class="nav-item"><a style="font-size: 20px" class="nav-item-child nav-item-hover" href="./profile">
                                    Admin: Dan Can</a></li>
                                <li class="nav-item"><a style="font-size: 10px" class="nav-item-child nav-item-hover" href="./"> Login screen </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/MainPics/06.jpg">
            <div class="parallax-content container">


                <!--========== FOOTER ==========-->
         <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container"> 
                <form action="./login" method="post">  
                    <div class="row"style="padding-left:100px;">
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Profile</h2>
                            <!--========== FORM TAG MISSING ==========-->
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Surname" required>
                             <!--========== TEXTAREA(bio), PHONE NUMBER NOT NEEDED  ==========-->
                              <!--========== ADD EXTRA TAG FOR CONFRIM PASSWORD, THIS USER IS REGISTERING!!!!!  ==========-->
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Bio" required></textarea>
                            <!--This button should just submit, but should not have onclick, page will be triggered by form "action" and "target" -->
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Register</button>
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Picture</h2>
                            <img  height="300" src="img/ProfilePictures/lady.jpg" alt="ThutongLogoSize"> </br>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Password" required>
                        </div>
                    </div>
                    <!--// end row -->
                    </form>
                </div>
            </div>
        </footer>
            <!-- End Links -->


            </div>
        </div>
        <!--========== PARALLAX ==========-->




        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            
            </div>
            <!-- End Links -->

           
        </footer>
        <!--========== END FOOTER ==========-->

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
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/gmap.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

    </body>
    <!-- END BODY -->
</html>




 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->

