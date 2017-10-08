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

Route::get('views/blog', function () {
    return view('blog');
})->name('blog');

Route::get('views/drivers', function () {
    return view('drivers');
})->name('drivers');

Route::get('views/tracks', function () {
    return view('tracks');
})->name('tracks');

Route::get('views/tyres', function () {
    return view('tyres');
})->name('tyres');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
