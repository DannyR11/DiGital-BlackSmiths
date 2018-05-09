<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title> Show Search </title>
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


            </div>
        </div>
        <!--========== PARALLAX ==========-->


         <!--========== FOOTER ==========-->
         <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-5 sm-margin-b-30">
                           
                            

                                    <div class="form-group">
                                        <label for="SubjectArea" style="color:purple; font-size:50px;"> SEARCH: </label>
                                        <input type="text" class="form-control footer-input margin-b-20" placeholder="Keywords" required>
                                        <!-- MAKE THIS REQUIRED ********************************************************** BEFORE SUBMITTING -->
                                            <select class="form-control" name="genres" id="genres" style="width: 200px" >
                                                  <option value="Subject Area"> Subject </option>
                                                  <option value="Grade"> Grade </option>
                                                  <option value="Lesson"> Lesson </option>
                                                  <option value="Topic"> Topic </option>
                                                  <option value="Quiz"> Quiz </option>
                                                  <option value="JobName"> Job Name </option>
                                                  <option value="JobLocation"> Job Location </option>
                                            </select>
                                    </div>
                                                        
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Search </button>

                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </footer>
            <!-- End Links -->




        <!--========== PAGE LAYOUT ==========-->
        <!-- User List -->
        <div class="section-seperator">
            <div class="content-lg container">
                <a style="font-size:40px"> Manual Search </a>
                <div class="row">

                    <!-- Amin List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           

                            <details>
                            <summary style="padding-left: 50px;"> <a style="font-size:30px"> Subject </a>
                            </summary>
                                <a style="padding-left: 50px;"> - Alicia alloy </a> </br>
                                <a style="padding-left: 50px;"> - Lesego selel </a> </br>
                            </details>   

                        </div>
                    </div>
                    <!-- End Amin List -->
                    <!-- Expert List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           

                            <details>
                            <summary style="padding-left: 50px;"> <a style="font-size:30px"> Grade </a>
                            </summary>
                                <a style="padding-left: 50px;"> - Alicia alloy (Admin)</a> </br>
                                <a style="padding-left: 50px;"> - Lesego selel (Student) </a> </br>
                                <a style="padding-left: 50px;"> - Hairstylist & Colorist</a> </br>
                                <a style="padding-left: 50px;"> - Primary School English Teachers</a> </br>
                            </details>   

                        </div>
                    </div>
                    <!-- End Expert List -->
                    <!-- Manager List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           

                            <details>
                            <summary style="padding-left: 50px;"> <a style="font-size:30px"> Lesson </a>
                            </summary>
                                <a style="padding-left: 50px;"> - Alicia alloy (Admin)</a> </br>
                                <a style="padding-left: 50px;"> - Lesego selel (Student) </a> </br>
                                <a style="padding-left: 50px;"> - Hairstylist & Colorist</a> </br>
                                <a style="padding-left: 50px;"> - Primary School English Teachers</a> </br>
                            </details>   

                        </div>
                    </div>
                    <!-- End Manager List -->
                    <!-- Student List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           

                            <details>
                            <summary style="padding-left: 50px;"> <a style="font-size:30px"> Topic </a>
                            </summary>
                                <a style="padding-left: 50px;"> - Alicia alloy (Admin)</a> </br>
                                <a style="padding-left: 50px;"> - Lesego selel (Student) </a> </br>
                                <a style="padding-left: 50px;"> - Hairstylist & Colorist</a> </br>
                                <a style="padding-left: 50px;"> - Primary School English Teachers</a> </br>
                            </details>   

                        </div>
                    </div>
                    <!-- End Student List -->
                    <!-- Student List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           

                            <details>
                            <summary style="padding-left: 50px;"> <a style="font-size:30px"> Quiz </a>
                            </summary>
                                <a style="padding-left: 50px;"> - Alicia alloy (Admin)</a> </br>
                                <a style="padding-left: 50px;"> - Lesego selel (Student) </a> </br>
                                <a style="padding-left: 50px;"> - Hairstylist & Colorist</a> </br>
                                <a style="padding-left: 50px;"> - Primary School English Teachers</a> </br>
                            </details>   

                        </div>
                    </div>
                    <!-- End Student List -->

                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End User List -->



        <!-- Back To Top -->
        @extends('layout.endLinks')
    </body>
    <!-- END BODY -->
</html>



 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->
 <!-- External Links Ignore ///////////////////////////////////////////////////////////////////// -->

 