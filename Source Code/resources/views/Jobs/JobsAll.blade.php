@extends('Layout.ShowOneTemplate')      
      
@section('showContent')
      <!--========== FOOTER ==========-->
        <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row" style="padding-left:100px;">

                <!-- PHP output list format -->
                <div style="background-color: rgba(10, 10, 10, 0.5); ">
							<h1 style="font-size:20px;">Job -> Info desk manager <h1  style="font-size:15px;"> Title-> Junior </h1><h2 style="font-size:10px;"> </h2></h1>
						</div>
						 </br>

					<h4> Description </h4>
					<p> THis job is The most important,  willingness to adapt that makes science useful, and allows new discoveries to be made. </p></br>

					<h4> Qualifications </h4>
					<p>  Matric </p></br>

					


					<h4> Location </h4>

					<img style="width: 80%; height: 220px;" src="QuizPictures/l1.png"/> </br> </br>
					<p> National Center for Biotechnology Information, </br> U.S. National Library of Medicine
						8600 Rockville Pike, </br> Bethesda MD, 20894 USA </p></br>

						


				 	<h4> Contact information </h4>

					<p> Matilda: 080 080 0808 </p>


					</br>
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



