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

Route::get('/', function () {
    return view('showLogin');
});

Route::post('/home', function(){
    //authenticate, maybe call some controller or Middleware(things that check if user is logged in and stuff)
    return view('showMain');
});

Route::get('/registerWithMail', function(){
    return view('emailRegistration');
});

Route::get('/aboutUs', function(){
    return view('showAbout');
});

Route::get('/search', function(){
    return view('searchPage');
});

Route::get('/fbRegistration', function(){
    return "<h1> Still to be implemented</h1>";
});

