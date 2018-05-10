@extends('Layout.ShowOneTemplate')      
      
@section('showContent')
       <!--========== FOOTER ==========-->
       <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="container" >
			
			<div class="col-md-10 col-sm-8 col-xs-8">

		
				
					<div style="padding-left: 50px; padding-right: 50px;" class="panel panel-default" style="background-color: rgba(255, 255, 285, 0.5);">
					
				
						<div style="background-color: white; ">
							<h1 style="font-size:20px;">Subject -> Science <h1  style="font-size:15px;"> Grade-> 12 </h1><h2 style="font-size:10px;"> Topic -> Chemistry<h3 style="font-size:15px;"> Quiz -> Chemistry Grade 12</h3></h2></h1>
						</div>
						 </br>

					<h4> Description </h4>
					<p> The most important, and most nts, this new informationr inconsistency, it is this very willingness to adapt that makes science useful, and allows new discoveries to be made. </p></br>

					


					<h4> Question 1 </h4>

					<img style="width: 100%; height: 160px;" src="QuizPictures/r1.png"/>
					<p> Based on the follwong pictures which reaction is correct? </p>

						<input type="radio" name="gender" value="male"> A<br>
					 	<input type="radio" name="gender" value="female"> B<br>
					 	<input type="radio" name="gender" value="other"> C</br>
					 	<input type="radio" name="gender" value="other"> D</br>


				 	<h4> Question 2 </h4>

					<img style="width: 100%; height: 160px;" src="QuizPictures/r1.png"/>
					<p> Based on the follwong pictures which reaction is correct? </p>

					<input type="radio" name="gender" value="male"> A<br>
					 	<input type="radio" name="gender" value="female"> B<br>
					 	<input type="radio" name="gender" value="other"> C</br>
					 	<input type="radio" name="gender" value="other"> D</br>


					<h4> Question 3 </h4>

					
					<p style="padding-left: 50px; padding-right: 50px;"> Based on the follwong pictures which reaction is correct? </p>

					<input type="radio" name="gender" value="male"> A<br>
					 	<input type="radio" name="gender" value="female"> B<br>
					 	<input type="radio" name="gender" value="other"> C</br>
					 	<input type="radio" name="gender" value="other"> D</br>



					<h4> Question 4 </h4>

					<p style="padding-left: 50px; padding-right: 50px;"> Based on the follwong pictures which reaction is correct? </p>


					<input type="radio" name="gender" value="male"> A<br>
					 	<input type="radio" name="gender" value="female"> B<br>
					 	<input type="radio" name="gender" value="other"> C</br>
					 	<input type="radio" name="gender" value="other"> D</br>


					
					</br></br>


					<input type="submit" value="Submit Resutls" class="btn btn-default"  />


		
					<h2> Quiz Results </h2>


					
					<a style="color:red; font-size:40px;" href="search.php" onclick="location.href='search.php?';"> 0 / 10 </a></br>


					</br>

					</div><!--/panel-->

			</div> <!--/col1-->
            </footer>
@endsection



@section('showListContent')
                    <div class="row" style="padding-left:100px;">
                    <!-- Contact List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                           
                        <h1> No previous quiz marks on record. </h1>

                        </div>
                    </div>
                    </div>
                    </br>
                    <a href="./quizAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Expert Quiz Add </a>
                    <a href="./quizManage" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Expert Quiz Manage </a>
                    <!-- End Contact List -->
@endsection