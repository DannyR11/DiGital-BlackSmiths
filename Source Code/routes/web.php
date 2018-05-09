<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//------------Login related Routes, Focus for today---------------------

Route::get('/', function () { // **
    return view('Login/Login');
});

Route::post('/login', 'LoginController@validateLogin'); //user tries to login, check credentials against db

Route::get('/fbLogin', function(){ //login via facebook, implemented at a later stage
    return "<h1>Under construction</h1>";
});

Route::get('/register', function(){
    return view('Login/LoginEmail');
});

Route::post('/register/email','loginController@saveUserInfo'); //call save user info to register User


//-----------End of login related routes-----------------------------------

Route::post('/main', function(){ // **
    return view('Main');
});

Route::get('/homeP', function(){ // **
    return view('ShowMain');
});

Route::get('/about', function(){ // **
    return view('About');
});

Route::get('/contact', function(){ // **
    return view('Contact');
});

Route::get('/search', function(){ // **
    return view('TemplateSearch');
});




// Profile
Route::get('/profile', function(){ // **
    return view('Profile/Profile');
});

Route::get('/profilesAll', function(){ // **
    return view('Profile/ProfilesAll');
});

Route::post('/profileSave', function(){ // **
    return view('Profile/Edit');
});




// Quiz
Route::get('/quiz', function(){ // **
    return view('Quiz/Quiz');
});

Route::get('/quizAdd', function(){ // **
    return view('Quiz/QuizAdd');
});

Route::get('/quizManage', function(){ // **
    return view('Quiz/QuizManage');
});




// Subject
Route::get('/subjectList', function(){ // **
    return view('SubjectList');
});

Route::get('/lesson', function(){ // **
    return view('Lesson/Lesson');
});

Route::get('/lessonAdd', function(){ // **
    return view('Lesson/LessonAdd');
});

Route::get('/lessonManage', function(){ // **
    return view('Lesson/LessonManage');
});




// Jobs
Route::get('/showAllJobs', function(){ // **
    return view('Jobs/JobsAll');
});

Route::get('/jobs', function(){ // **
    return view('Jobs/Job');
});

Route::get('/jobsAdd', function(){ // **
    return view('Jobs/JobsAdd');
});

Route::get('/jobsManage', function(){ // **
    return view('Jobs/JobsManage');
});




// Discussion
Route::post('/discussionForum', function(){
    //authenticate, maybe call some controller or Middleware(things that check if user is logged in and stuff)
    return view('DiscussionForum');
});




// Report
Route::get('/reportAdmin', function(){
    return view('Reports/ReportAdmin');
});

Route::get('/reportManager', function(){
    return view('Reports/ReportMarketing');
});

Route::get('/ReportExpert', function(){
    return view('Reports/ReportExpert');
});


?>
