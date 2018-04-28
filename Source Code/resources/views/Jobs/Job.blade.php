@extends('Layout.ShowOneTemplate')      
      
@section('showContent')
       <!--========== FOOTER ==========-->
       <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row" style="padding-left:100px;">
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Job Description</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="name" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="type" required>
                            
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Description" required></textarea>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Email Recruiter</button>
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Location</h2>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Location" required></textarea>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Contact" required>
                        </div>
                    </div>
                    <!--// end row -->
@endsection



@section('showListContent')
<div class="row">
                    <!-- Contact List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           
                            <details>
                            <summary style="padding-left: 50px;"> <a style="font-size:20px"> Show List of jobs </a>
                            </summary>
                                <a style="padding-left: 50px;"> - Beautician</a> </br>
                                <a style="padding-left: 50px;"> - French National - Operations Manager</a> </br>
                                <a style="padding-left: 50px;"> - Hairstylist & Colorist</a> </br>
                                <a style="padding-left: 50px;"> - Primary School English Teachers</a> </br>
                            </details>   

                        </div>
                    </div>
                    <!-- End Contact List -->
@endsection