<?php

use App\User;

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
    return redirect('login');
});
//admin
Route::resource('/user', 'UserController');
Route::get('/profile', 'UserController@profile');

Route::post('/profile/{id}', 'GeneralUser@update');


//dealer
Route::get('/dealerProductGallery', 'DealerController@showGalleryProduct');
Route::get('/dealerOrder', 'DealerController@showDealerOrder');
Route::post('/dealerOrder', 'DealerController@submitDealerOrder');

//delegate
Route::resource('/priceUpdate', 'DelegateController');
Route::get('/galleryProduct', 'DelegateController@showGalleryProduct');

//farmer
Route::resource('/farmerProduct', 'FarmerController');
Route::get('/farmerLoan', 'FarmerController@showFarmerLoan');
Route::post('/farmerLoan', 'FarmerController@submitFarmerLoan');


Auth::routes();

