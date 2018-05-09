@extends('Layout.ShowOneTemplate')      

      @section('showContent')
      <h1 style="color:white"> Subject List <h1>
      @endsection
      
      
      
      @section('showListContent')
              <!--========== FOOTER ==========-->
        <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row" style="padding-left:100px;">

                <!-- PHP output list format -->
                    <h1> -> Subject <h1>
                    <h2> ---------> Grade <h2>
                    <h2> ---------> Topic <h2>
                    <a href="./lesson" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Lesson </a>
                    <a href="./quiz" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Quiz </a>
                   
                 
                        </br>
                        <h1> -> Subject <h1>
                    <h2> ---------> Grade <h2>
                    <h2> ---------> Topic <h2>
                    <h2> --------------> Lesson <h2>
                    <h2> --------------> Quiz <h2>
                    <a href="./jobs" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Lesson </a>
                    <a href="./jobs" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Lesson </a>
                 
                    <!--// end row -->
                </div>
                
            </div>
            <a href="./jobsAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Jobs Add</a>
            <a href="./jobsManage" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Jobs Manage</a>
        </footer>
            <!-- End Links -->
      @endsection