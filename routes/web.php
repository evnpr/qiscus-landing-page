<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/','LayoutsController');
Route::get('/about','LayoutsController@about');
Route::get('/solutions','LayoutsController@solutions');
Route::get('/pricing','LayoutsController@pricing');
Route::get('/programs','LayoutsController@programs');
Route::get('/resources','LayoutsController@resources');
Route::get('/contact','LayoutsController@contact');
Route::get('/legal','LayoutsController@legal');
Route::get('/join','LayoutsController@join');
Route::get('/sales','LayoutsController@sales');
Route::get('/soon','LayoutsController@soon');


Route::get('/resources/talks','LayoutsController@talks');
Route::get('/resources/talks','LayoutsController@talks');

Route::get('/solutions/sdk','LayoutsController@sdk');
Route::get('/solutions/accelerator','LayoutsController@accelerator');
Route::get('/solutions/bot','LayoutsController@bot');