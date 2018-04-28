

@extends('Layout.ShowOneTemplate')      
      
@section('showContent')
 
@endsection



@section('showListContent')
         <!--========== FOOTER ==========-->
         <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row" style="padding-left:100px;">
                    <form action="./profileSave" method="post">
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
            </div>
        </footer>
            <!-- End Links -->
             <!--========== FOOTER ==========-->
        <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row" style="padding-left:100px;">
                    <form action="./profileSave" method="post">
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Profile</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Surname" required>
                            
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Bio" required></textarea>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Admin Save changes</button>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Admin Delete profile</button>
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
            </div>
        </footer>
            <!-- End Links -->
@endsection