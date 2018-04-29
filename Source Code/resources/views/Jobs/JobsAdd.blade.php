@extends('Layout.ShowOneTemplate')      
      
@section('showContent')
      <!--========== FOOTER ==========-->
        <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row" style="padding-left:100px;">
                    <form action="./profileSave" method="post">
                    <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Job Description</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="name" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="type" required>
                            
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Description" required></textarea>
                           
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Location</h2>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Location" required></textarea>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Contact" required>
                        </div>
                        
                    </div>
                    <!--// end row -->
                </div>
                <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Add job</button>
                <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Remove job</button>
            </div>
        </footer>
            <!-- End Links -->
@endsection



@section('showListContent')
        <a style="font-size:30px"> Click to Display by: </a>
            <div class="row">
                    <!-- Contact List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           
                            <details>
                            <summary style="padding-left: 50px;"> <a style="font-size:20px"> Name </a>
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
                            <summary style="padding-left: 50px;"> <a style="font-size:20px"> Location </a>
                            </summary>
                                <a style="padding-left: 50px;"> - Johhanesburg</a> </br>
                                <a style="padding-left: 50px;"> - Capetown </a> </br>
                                <a style="padding-left: 50px;"> - Dubai </a> </br>
                                <a style="padding-left: 50px;"> - Durban </a> </br>
                            </details>   

                        </div>
                    </div>
                    <!-- End Contact List -->

                </div>
                <!--// end row -->
@endsection