<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title> Welcome </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

       @extends('layout.app')
    </head>



    <style>
     
.navbar {
    color: #FFFFFF;
    background-color: maroon;
}

    </style>

    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        @extends('layout.Navbar')
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
                                <p style="font-size: 30px; color:#D35400;">Thutong is a site that specializes in providing information learning tools to assist  <br/> in the education of everyday students. </p>
                            </div>
                            <a href="./search"  style="font-size: 36px; color:#D35400;" class="btn-theme btn-theme-sm  text-uppercase"> search </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/MainPics/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title" style="color:#8E44AD;">Topics and Lessons</h2>
                                <p style="font-size: 30px; color:#8E44AD;">A wide range of expert managed content is provided <br/> for a vast majority of subjects and grades. </p>
                            </div>
                            <a href="./search" style="font-size: 36px; color:#8E44AD;" class="btn-theme btn-theme-sm  text-uppercase">search</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/MainPics/03.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title" style="color:#21618C;">Quiz</h2>
                                <p style="font-size: 30px; color:#21618C;"> Try any of our quizes and get yourself graded <br/> to see how much you have understood of our lessons. </p>
                            </div>
                            <a href="./search" style="font-size: 36px; color:#21618C;" class="btn-theme btn-theme-sm text-uppercase">search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->

            <div class='content-lg container'>
                <div class='row row-space-1 margin-b-2'>
                    <div class='col-sm-4 sm-margin-b-2'>
                        <div class='wow fadeInLeft' data-wow-duration='.3' data-wow-delay='.3s'>
                            <div class='service' data-height='height'>
                                <div class='service-element;>

                             <h1 style='font-size:50px;'> $row[SubArea]: </h1>
                            <img  src='$subPic' width='100%' height='160px'/>                   
                            <p style='font-size:10px;'> $row[SubDescription] </p>
 
                                                <a font-size:16px;'>* $rowss[GradeName] </a>
                                                <p style='font-size:10px;'> - > $rowss[GradeDescription] </p>
                            
                            </div>
                            </div>
                            </div>
                            </div>";
         
        

        
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
        @extends('layout.endLinks')

    </body>
    <!-- END BODY -->
</html>




 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->

 