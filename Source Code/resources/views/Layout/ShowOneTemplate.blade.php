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
         @extends('layout.Navbar')
        <!--========== END HEADER ==========-->

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/MainPics/06.jpg">
            <div class="parallax-content container">

                @yield('showContent')

            </div>
        </div>
        <!--========== PARALLAX ==========-->


        <!--========== PAGE LAYOUT ==========-->
        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-lg container">
                
                
               @yield('showListContent')
            </div>
        </div>
        <!-- End Contact List -->
       
           

       

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            
            
            <!-- End Links -->

           
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        @extends('layout.endLinks')

    </body>
    <!-- END BODY -->
</html>