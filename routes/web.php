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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/techers/', function () {
//     return ('welcome');
// });
Route::get('/teachers/','FontEndController@All_teachers_show');
Route::get('/','FontEndController@index');

Route::get('/activity-details/{id}','FontEndController@Activity_show');
Route::get('/teacher-details/{id}','FontEndController@Teacher_show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/zitu/','BackEndController@index');

// Route::group(['prefix'=>'admin'], function(){

// });
Route::resource('post','PostController');
Route::resource('teachers','TeacherController');