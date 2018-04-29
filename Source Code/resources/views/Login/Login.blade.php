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
                            <a class="logo-wrap" href="./homeP">
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
                                <li class="nav-item"><a style="font-size: 10px" class="nav-item-child nav-item-hover" href="./"> Logout </a></li>
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
                    <div class="row" style="padding-left:100px;">
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Login Details</h2>
                            <!-- FORM TAGS MISSING!!!!!!!! -->
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Password" required>

                            <!--These buttons should just submit, but should not have onclick, page will be triggered by form "action" and "target" -->
                            <button type="submit" onclick="window.location.href='ShowMainLoggedInMain.html'" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Login </button>
                            <button type="submit" onclick="window.location.href='ShowLoginResetPassword.html'" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Reset </button>
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Register via</h2>
                            <img onclick="window.location.href='./register'" height="200" src="img/widgets/email.png" alt="ThutongLogoSize">
                            <img onclick="window.location.href='./fbLogin'" height="200" src="img/widgets/facebook.png" alt="ThutongLogoSize"> </br>
                        </div>
                    </div>
                    <!--// end row -->
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

        @extends('layout.endLinks')

    </body>
    <!-- END BODY -->
</html>