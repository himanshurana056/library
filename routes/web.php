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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/books', 'BooksController')->middleware('auth');

Route::get('/getstatus','BooksController@getStatus');

Route::resource('/students','StudentsController')->middleware('auth');

Route::resource('/student_profiles','StudentProfilesController')->middleware('auth');

 Route::get('/activestore','StudentsController@activeStore');