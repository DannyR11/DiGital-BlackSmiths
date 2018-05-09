@extends('Layout.ShowOneTemplate')      
      
@section('showContent')
      <!--========== FOOTER ==========-->
        <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row" style="padding-left:100px;">

                <!-- PHP output list format -->
                    <h1> -> Location <h1>
                    <h2> -------> JobName <h2>
                    <a href="./jobs" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Job</a>
                 
                        </br>
                    <h1> -> Location <h1>
                    <h2> -------> JobName <h2>
                    <a href="./jobs" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Job</a>
                 
                    <!--// end row -->
                </div>
                
            </div>

            <!-- button go to add forms etc -->
            <a href="./jobsAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Jobs Add</a>
            <a href="./jobsManage" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Jobs Manage</a>

        </footer>
            <!-- End Links -->
@endsection



