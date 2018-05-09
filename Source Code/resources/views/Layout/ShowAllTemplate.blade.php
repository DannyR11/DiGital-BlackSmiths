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
    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        @extends('layout.Navbar')
        <!--========== END HEADER ==========-->

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/MainPics/06.jpg">
            <div class="parallax-content container">
            <a style="font-size:40px"> Display Profiles </a>
            </div>
        </div>
       
        <!--========== PARALLAX ==========-->


        <!--========== PAGE LAYOUT ==========-->
        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-lg container">
                
                @yield('showContentAll')

            </div>
        </div>
        <!-- End Contact List -->
       
            <!--========== FOOTER ==========-->
        
            @yield('showListContentAll')
           
        <!--========== END FOOTER ==========-->

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

