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
//
//frontend 
// Route::get('/quadinfo', function(){
// 	return view('frontend/pages/index');
// }); 

// Route::get('/About',function(){
// 	return view('frontend/pages/about');
// });
Route::get('/', 'frontendController@index')->name('index');

Route::get('/about', 'aboutController@about')->name('about');
Route::get('/bloge-single', 'blogController@single')->name('blogsingle');
Route::get('/blog', 'blogController@blog')->name('blog');
Route::get('/contact', 'contactController@contact')->name('contact');
Route::get('/project', 'projectController@project')->name('project');
Route::get('/services', 'servicesController@services')->name('services');
Route::get('/career', 'frontendController@career')->name('career');
Route::post('/career_post','frontendController@careerpost')->name('career_post');
Route::get('cvfile/', 'adminController@index')->name('cvfile');