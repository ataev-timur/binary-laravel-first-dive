<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return 'Welcome Home!';
});

Route::get('/phone', function() {
    return Response::view('smartphone', ['smartPhone'=>app('SmartPhone')]);
});

Route::get('/gravatar', function(){
   return Response::view('gravatar', ['image'=>Gravatar::get('ataevtimur@gmail.com')]);
});

Route::get('/shorten', function(){
   var_dump(Bitly::shorten('http://academy.binary-studio.com/#/user/hometaskinfo?id=5592d539c200e4d84feb2863'));
});
