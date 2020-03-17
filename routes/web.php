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
    return view('landingPage');
});

Auth::routes();

// Route::get('Controller/uid/{uid}', 'CTL_Contro_Matchs@C');

// Route::get('Controller/{uid}', 'CTL_Contro_Matchs@C');
Route::get('Controller/api/{tid}', 'CTL_Contro_Matchs@api');

Route::get('Controller/inGame/{tid}', 'CTL_Contro_Matchs@inGame');

Route::get('Controller/Ban/{tid}', 'CTL_Contro_Matchs@Ban');

Route::resource('/Controller', 'CTL_Contro_Matchs');

Route::resource('/home','HomeController');
