@extends('Layout.ShowOneTemplate')      
      
@section('showContent')
       <!--========== FOOTER ==========-->
       <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="container" >
			
			<div class="col-md-10 col-sm-8 col-xs-8">

		
				
					<div style="padding-left: 50px; padding-right: 50px;" class="panel panel-default" style="background-color: rgba(255, 255, 285, 0.5);">
					
				
						<div style="background-color: white; ">
					

                        <h4> Select which quiz to edit by name: </h4>
                                            <select class="form-control" name="genres" id="genres" style="width: 200px" >
                                                  <option value="Subject Area"> Quiz name list </option>
                                                  <option value="Grade"> Maths1 </option>
                                                  <option value="Lesson"> Science1 </option>
                                                  <option value="Topic"> Biology2 </option>
                                                  <option value="Quiz"> Georgraphy2 </option>
                                            </select>
                 

					<h4> Description </h4>
					<p> The most important, and most nts, this new informationr inconsistency, it is this very willingness to adapt that makes science useful, and allows new discoveries to be made. </p></br>
                    <a href="./quizAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Edit description </a>
                    </br>
                    </br>
                    </br>
                    </br>


					<h4> Question 1 </h4>

					<img style="width: 100%; height: 160px;" src="QuizPictures/r1.png"/>
					<p> Based on the follwong pictures which reaction is correct? </p>

						<input type="radio" name="gender" value="male"> A<br>
					 	<input type="radio" name="gender" value="female"> B<br>
					 	<input type="radio" name="gender" value="other"> C</br>
					 	<input type="radio" name="gender" value="other"> D</br>
                        <a href="./quizAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Edit question </a>


				 	<h4> Question 2 </h4>

					<img style="width: 100%; height: 160px;" src="QuizPictures/r1.png"/>
					<p> Based on the follwong pictures which reaction is correct? </p>

					<input type="radio" name="gender" value="male"> A<br>
					 	<input type="radio" name="gender" value="female"> B<br>
					 	<input type="radio" name="gender" value="other"> C</br>
					 	<input type="radio" name="gender" value="other"> D</br>
                        <a href="./quizAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Edit question </a>


					<h4> Question 3 </h4>

					
					<p style="padding-left: 50px; padding-right: 50px;"> Based on the follwong pictures which reaction is correct? </p>

					<input type="radio" name="gender" value="male"> A<br>
					 	<input type="radio" name="gender" value="female"> B<br>
					 	<input type="radio" name="gender" value="other"> C</br>
					 	<input type="radio" name="gender" value="other"> D</br>
                        <a href="./quizAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Edit question </a>



					<h4> Question 4 </h4>

					<p style="padding-left: 50px; padding-right: 50px;"> Based on the follwong pictures which reaction is correct? </p>


					<input type="radio" name="gender" value="male"> A<br>
					 	<input type="radio" name="gender" value="female"> B<br>
					 	<input type="radio" name="gender" value="other"> C</br>
					 	<input type="radio" name="gender" value="other"> D</br>
                        <a href="./quizAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Edit question </a>

					
					</br></br>


					<input type="submit" value="Submit Changes" class="btn btn-default"  />


					</br>
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
                           
                       

                        </div>
                    </div>
                    </div>
                    </br>
                    <a href="./quizAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Expert Quiz Add </a>
                    
                    <!-- End Contact List -->
@endsection