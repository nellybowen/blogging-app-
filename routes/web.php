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
   return view('welcome');


});

//Route::get('users',['uses'=>'usercontroller@index']);
//Route::get('users/create',['uses'=>'usercontroller@create']);
//Route::post('users',['uses'=>'usercontroller@store']);
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('welcome',['uses'=>'HomeController@welcome']);
Route::get('about',['uses'=>'HomeController@about']);
Route::get('services',['uses'=>'HomeController@services']);
Route::resource('posts','PostsController');
