@extends('Layout.ShowOneTemplate')      
      
@section('showContent')
       <!--========== FOOTER ==========-->
       <footer class="footer" style="width:100; background: url(img/MainPics/05.jpg);">
            <!-- Links -->
            <div class="container" >
			
			<div class="col-md-10 col-sm-8 col-xs-8">

		
				
					<div style="padding-left: 50px; padding-right: 50px;" class="panel panel-default" style="background-color: rgba(255, 255, 285, 0.5);">
					
				
						<div style="background-color: white; ">

                         <h4> Select where to add quiz </h4>
                                            <select class="form-control" name="genres" id="genres" style="width: 200px" >
                                                  <option value="Subject Area"> Subject </option>
                                                  <option value="Grade"> Maths </option>
                                                  <option value="Lesson"> Science </option>
                                                  <option value="Topic"> Biology </option>
                                                  <option value="Quiz"> Georgraphy </option>
                                            </select>
                                            <select class="form-control" name="genres" id="genres" style="width: 200px" >
                                                  <option value="Subject Area"> Grade </option>
                                                  <option value="Grade"> 8 </option>
                                                  <option value="Lesson"> 9 </option>
                                                  <option value="Topic"> 10 </option>
                                                  <option value="Quiz"> 11 </option>
                                                  <option value="Quiz"> 12 </option>
                                            </select>
                                            <select class="form-control" name="genres" id="genres" style="width: 200px" >
                                                  <option value="Subject Area"> Topic </option>
                                                  <option value="Grade"> 1 </option>
                                                  <option value="Lesson"> 2 </option>
                                                  <option value="Topic"> 3 </option>
                                                  <option value="Quiz"> 4 </option>
                                                  <option value="Quiz"> 5 </option>
                                            </select>
                                            <select class="form-control" name="genres" id="genres" style="width: 200px" >
                                                  <option value="Subject Area"> Lesson </option>
                                                  <option value="Grade"> 1 </option>
                                                  <option value="Lesson"> 2 </option>
                                                  <option value="Topic"> 3 </option>
                                                  <option value="Quiz"> 4 </option>
                                                  <option value="Quiz"> 5 </option>
                                            </select>
						</div>
						 </br>

                    <h4> Quiz name </h4>
					<input type="text" class="form-control footer-input margin-b-20" placeholder="Add quiz name" required>
                    </br>

					<h4> Description </h4>
					<input type="text" class="form-control footer-input margin-b-20" placeholder="Add quiz description" required>
                    </br>


					<h4> Question Add </h4>

					<input type="text" class="form-control footer-input margin-b-20" placeholder="Question goes here" required>
                    <p> Select the radio which is the correct answer to the above question </p>
                    <input type="radio" name=" gender" value="A"> <input type="text" class="form-control footer-input margin-b-20" placeholder="A = answer" required>
                    <input type="radio" name=" gender" value="B"> 
                    <input type="text" class="form-control footer-input margin-b-20" placeholder="B = answer" required>
                    <input type="radio" name=" gender" value="C"> 
                    <input type="text" class="form-control footer-input margin-b-20" placeholder="C = answer" required>
                    <input type="radio" name=" gender" value="D"> 
                    <input type="text" class="form-control footer-input margin-b-20" placeholder="D = answer" required>
                    <input type="submit" value="Add another question to this quiz" class="btn btn-default"  />


					</br></br>


					<input type="submit" value="Add Quiz" class="btn btn-default"  />

		
					<h2> Quiz Results </h2>


					
					<a style="color:red; font-size:40px;" href="search.php" onclick="location.href='search.php?';"> 0 / 10 </a></br>


					</br>

					</div><!--/panel-->

			</div> <!--/col1-->
            </footer>
@endsection



@section('showListContent')
               
                    </br>
                    <a href="./quizAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Expert Quiz Add </a>
                    <a href="./quizManage" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Expert Quiz Manage </a>
                    <!-- End Contact List -->
@endsection