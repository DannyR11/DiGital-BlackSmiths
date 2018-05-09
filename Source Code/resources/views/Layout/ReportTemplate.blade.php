<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title> Freebie </title>
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
                                
                                <li class="nav-item"><a style="font-size: 20px" class="nav-item-child nav-item-hover active" href="./home">Home</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./aboutUs">About</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./modules">Subjects</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./vacancies">Jobs</a></li>
                                <li class="nav-item"><a style="font-size: 12px" class="nav-item-child nav-item-hover" href="./contactUs">Contact Us</a></li>
                                <li class="nav-item"><a style="font-size: 20px" class="nav-item-child nav-item-hover" href="./profile">
                                    Admin: Dan Can</a></li>
                                <li class="nav-item"><a style="font-size: 10px" class="nav-item-child nav-item-hover" href="./showLogin"> Logout </a></li>
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


            </div>
        </div>
        <!--========== PARALLAX ==========-->


        <!--========== PAGE LAYOUT ==========-->
        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-lg container">
                
                
               @yield('showListReport')

               
            </div>
        </div>
        <!-- End Contact List -->
       
        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        @extends('layout.endLinks')

    </body>
    <!-- END BODY -->
</html>




 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->

