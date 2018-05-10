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
                            <details>
                                <summary> <a class="btn-theme btn-theme-sm " style="font-size:40px"> > Grade 8 </a>
                                </summary>
                                    <details>
                                    <summary class="btn-theme btn-theme-sm " style="padding-left: 50px;"> <a style="font-size:30px">  Subject (Science) </a>
                                    </summary>
                                        <details>
                                        <summary style="padding-left: 50px;"> <a style="font-size:20px">  Topic (Molecules) </a>
                                        </summary>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 1 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 2 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 3 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 4 </a> </br>
                                            <a href="./quiz" style="padding-left: 250px;" class="btn-theme btn-theme-sm "> Quiz (Molecules) </a> </br> </br>
                                        </details>
                                        <details>
                                        <summary style="padding-left: 50px;"> <a style="font-size:20px">  Topic (Chemsitry) </a>
                                        </summary>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 1 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 2 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 3 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 4 </a> </br>
                                            <a href="./quiz" style="padding-left: 250px;" class="btn-theme btn-theme-sm "> Quiz (Chemistry) </a> </br> </br>
                                        </details>   
                                </details>
                                <details>
                                    <summary class="btn-theme btn-theme-sm " style="padding-left: 50px;"> <a style="font-size:30px">  Subject (Biology) </a>
                                    </summary>
                                        <details>
                                        <summary style="padding-left: 50px;"> <a style="font-size:20px">  Topic (Brain) </a>
                                        </summary>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 1 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 2 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 3 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 4 </a> </br>
                                            <a href="./quiz" style="padding-left: 250px;" class="btn-theme btn-theme-sm "> Quiz (Brain) </a> </br> </br>
                                        </details>   
                                </details>   
                            </details>   

                            </br>
                            </br>

                            <details>
                                <summary> <a class="btn-theme btn-theme-sm " style="font-size:40px"> > Grade 10 </a>
                                </summary>
                                    <details>
                                    <summary class="btn-theme btn-theme-sm " style="padding-left: 50px;"> <a style="font-size:30px">  Subject (Science) </a>
                                    </summary>
                                        <details>
                                        <summary style="padding-left: 50px;"> <a style="font-size:20px">  Topic (Molecules) </a>
                                        </summary>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 1 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 2 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 3 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 4 </a> </br>
                                            <a href="./quiz" style="padding-left: 250px;" class="btn-theme btn-theme-sm "> Quiz (Molecules) </a> </br> </br>
                                        </details>
                                        <details>
                                        <summary style="padding-left: 50px;"> <a style="font-size:20px">  Topic (Chemsitry) </a>
                                        </summary>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 1 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 2 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 3 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 4 </a> </br>
                                            <a href="./quiz" style="padding-left: 250px;" class="btn-theme btn-theme-sm "> Quiz (Chemistry) </a> </br> </br>
                                        </details>   
                                </details>
                                <details>
                                    <summary class="btn-theme btn-theme-sm " style="padding-left: 50px;"> <a style="font-size:30px">  Subject (Geography) </a>
                                    </summary>
                                        <details>
                                        <summary style="padding-left: 50px;"> <a style="font-size:20px">  Topic (Maps) </a>
                                        </summary>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 1 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 2 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 3 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 4 </a> </br>
                                            <a href="./quiz" style="padding-left: 250px;" class="btn-theme btn-theme-sm "> Quiz (maps) </a> </br> </br>
                                        </details>   
                                </details>   
                            </details>   

                            </br>
                            </br>
                       
                            <details>
                                <summary> <a class="btn-theme btn-theme-sm " style="font-size:40px; color:red'"> > Grade 12 </a>
                                </summary>
                                    <details>
                                    <summary class="btn-theme btn-theme-sm " style="padding-left: 50px;"> <a style="font-size:30px">  Subject (Maths) </a>
                                    </summary>
                                        <details>
                                        <summary style="padding-left: 50px;"> <a style="font-size:20px">  Topic (Binomials) </a>
                                        </summary>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 1 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 2 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 3 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 4 </a> </br>
                                            <a href="./quiz" style="padding-left: 250px;" class="btn-theme btn-theme-sm "> Quiz (Binomials) </a> </br> </br>
                                        </details>
                                        <details>
                                        <summary style="padding-left: 50px;"> <a style="font-size:20px">  Topic (Trig) </a>
                                        </summary>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 1 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 2 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 3 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 4 </a> </br>
                                            <a href="./quiz" style="padding-left: 250px;" class="btn-theme btn-theme-sm "> Quiz (Trig) </a> </br> </br>
                                        </details>   
                                </details>
                                <details>
                                    <summary class="btn-theme btn-theme-sm " style="padding-left: 50px;"> <a style="font-size:30px">  Subject (History) </a>
                                    </summary>
                                        <details>
                                        <summary style="padding-left: 50px;"> <a style="font-size:20px">  Topic (WW2) </a>
                                        </summary>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 1 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 2 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 3 </a> </br>
                                            <a href="/lesson" style="padding-left: 250px;"> - Lesson 4 </a> </br>
                                            <a href="./quiz" style="padding-left: 250px;" class="btn-theme btn-theme-sm "> Quiz (WW2) </a> </br> </br>
                                        </details>   
                                </details>   
                            </details>   


                </div>
            </div>
            <a href="./jobsAdd" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Subjects Add</a>
            <a href="./jobsManage" class="btn-theme btn-theme-sm btn-base-bg text-uppercase"> Subjects Manage</a>
        </footer>
            <!-- End Links -->
      @endsection