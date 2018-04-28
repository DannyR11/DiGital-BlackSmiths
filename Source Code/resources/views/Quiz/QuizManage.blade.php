@extends('Layout.ShowOneTemplate')      
      
@section('showContent')
       <!--========== FOOTER ==========-->
       <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row" style="padding-left:100px;">
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white"> Quiz - name</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="name" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="type" required>
                            
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Description" required></textarea>
                           
                        </div>
                    </div>
                    <!--// end row -->
@endsection



@section('showListContent')
                        <div class="row" style="padding-left:100px;">
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Remove Quiz</button>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Save Quiz</button>
                        </div>   
@endsection