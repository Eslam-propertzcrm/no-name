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

//general
Route::get('/', function () {
    return redirect('login');
});

Route::get('/priceCompany', 'GeneralUser@priceCompany');


//admin
Route::resource('/user', 'UserController');
Route::get('/profile', 'UserController@profile');
Route::post('/profile/{id}', 'GeneralUser@update');

Route::get('/reportSale', 'UserController@reportSale');
Route::get('/reportBuy', 'UserController@reportBuy');
Route::post('/deleteReportSale/{id}', 'UserController@deleteReportSale');
Route::post('/deleteReportBuy/{id}', 'UserController@deleteReportBuy');


//dealer
Route::get('/dealerProductGallery', 'DealerController@showGalleryProduct');
Route::get('/dealerOrder', 'DealerController@showDealerOrder');
Route::post('/dealerOrder', 'DealerController@submitDealerOrder');

//delegate
Route::resource('/priceUpdate', 'DelegateController');
Route::get('/galleryProduct', 'DelegateController@showGalleryProduct');

Route::get('/delegateSale', 'DelegateController@delegateSale');
Route::post('/submitDelegateDoneOrder', 'DelegateController@submitDelegateDoneOrder');

Route::get('/delegateBuy', 'DelegateController@delegateBuy');
Route::post('/submitDelegateDoneBuy', 'DelegateController@submitDelegateDoneBuy');


//farmer
Route::resource('/farmerProduct', 'FarmerController');
Route::get('/farmerLoan', 'FarmerController@showFarmerLoan');

Route::post('/farmerLoan', 'FarmerController@submitFarmerLoan');


//callCenter
Route::get('/listFarmerLoans', 'CallCenterController@listFarmerLoans');
Route::post('/deleteFarmerLoan/{id}', 'CallCenterController@deleteFarmerLoan');

Route::get('/listFarmerProduct', 'CallCenterController@listFarmerProduct');
Route::post('/deleteFarmerProduct/{id}', 'CallCenterController@deleteFarmerProduct');

Route::get('/listDealerOrder', 'CallCenterController@listDealerOrder');
Route::post('/deleteDealerOrder/{id}', 'CallCenterController@deleteDealerOrder');

Auth::routes();

