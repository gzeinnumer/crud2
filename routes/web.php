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

//todo 9
Route::resource('/books', 'BookController');

//todo 10 php artisan route:list

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
