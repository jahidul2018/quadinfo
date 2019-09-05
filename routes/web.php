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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function() {
//	return view('index');
//});
Route::get('/quadinfo', function(){
	return view('frontend/pages/index');
}); 

//Route::get('/quadinfo', 'frontend\FrontendController@index')->name('quadinfo');
//Route::get('/quadinfo', 'frontend\FrontendController@index')->name('quadinfo');