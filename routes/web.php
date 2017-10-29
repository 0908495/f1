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

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});

Route::get('views/blogs', 'BlogsController@index')->name('blogs');

Route::get('views/drivers', 'DriversController@index')->name('drivers');

Route::get('views/tyres', 'TyresController@index')->name('tyres');

Route::get('views/tracks', 'TracksController@index')->name('tracks');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/reject', 'RejectController@index')->name('reject');

Route::get('/addblogentry', 'AddBlogController@index')->name('addblogentry');