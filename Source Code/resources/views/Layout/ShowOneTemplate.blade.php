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

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
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
       

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{ asset('vendor/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{ asset('vendor/jquery.easing.js')}}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.parallax.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('js/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/components/wow.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/components/gmap.min.js')}}" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

    </body>
    <!-- END BODY -->
</html>




 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->

