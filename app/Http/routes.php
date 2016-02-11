<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});




 Route::post('Users/auth',  array('uses' => 'UserController@showwelcome'));
// route to show the login form
Route::get('login', array('uses' => 'UserController@showLogin'));


Route::get('/login1', function () {
    return view('login1');
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

// Route::get('/testnew', function () {
//     return view('login1');
// });

// Route::get('/testnew',array('uses' => 'UserController@getHomeData'));

 // Route::get('/testnew',function(){
 // 	Route::post('testnew',array('uses' => 'UserController@getHomeData'));
 // });


Route::post('home',array('uses' =>'UserController@getHomeData'));