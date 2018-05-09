@extends('Layout.ShowOneTemplate')      
      
@section('showContent')
      <!--========== FOOTER ==========-->
        <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row" style="padding-left:100px;">
                    <form action="./  "      method="post">
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Profile</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Surname" required>
                            
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Bio" required></textarea>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Save changes</button>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Delete profile</button>
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Picture</h2>
                            <img  height="300" src="img/ProfilePictures/lady.jpg" alt="ThutongLogoSize"> </br>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Password" required>
                        </div>
                    </form>
                    </div>
                    <!--// end row -->
                </div>
                <a href="./profilesAll" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Admin all profiles</a>
            </div>
        </footer>
            <!-- End Links -->
@endsection



@section('showListContent')
        <a style="font-size:30px"> Click to Display </a>
            <div class="row">
                    <!-- Contact List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           
                            <details>
                            <summary style="padding-left: 50px;"> <a style="font-size:20px"> Lesson History </a>
                            </summary>
                                <a style="padding-left: 50px;"> - Beautician</a> </br>
                                <a style="padding-left: 50px;"> - French National - Operations Manager</a> </br>
                                <a style="padding-left: 50px;"> - Hairstylist & Colorist</a> </br>
                                <a style="padding-left: 50px;"> - Primary School English Teachers</a> </br>
                            </details>   

                        </div>
                    </div>
                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           
                            <details>
                            <summary style="padding-left: 50px;"> <a style="font-size:20px"> Quiz History </a>
                            </summary>
                                <a style="padding-left: 50px;"> - Beautician</a> </br>
                                <a style="padding-left: 50px;"> - French National - Operations Manager</a> </br>
                                <a style="padding-left: 50px;"> - Hairstylist & Colorist</a> </br>
                                <a style="padding-left: 50px;"> - Primary School English Teachers</a> </br>
                            </details>   

                        </div>
                    </div>
                    <!-- End Contact List -->

                </div>
                <!--// end row -->
@endsection