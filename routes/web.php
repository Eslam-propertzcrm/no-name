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
    return view('auth.login');
});

Route::resource('/user', 'UserController');
Route::get('profile', 'UserController@profle');


Route::get('/vegetableprice', function () {
    echo ' vegetableprice';
});

Route::get('/galleryVegetables', function () {
    echo 'galleryVegetables ';
});

Route::get('/vegetable', function () {
    echo ' vegetable';
});
Route::get('/orders', function () {
    echo ' orders';
});


Auth::routes();

