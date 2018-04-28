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
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit Quiz</button>
                        </div>
                    </div>
                    <!--// end row -->
@endsection



@section('showListContent')
                    <div class="row" style="padding-left:100px;">
                    <!-- Contact List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           
                        <h1> Marks = 100 % </h1>

                        </div>
                    </div>
                    <a href="./quizAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Expert Quiz Add </a>
                    <a href="./quizManage" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Expert Quiz Manage </a>
                    <!-- End Contact List -->
@endsection