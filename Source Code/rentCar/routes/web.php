<?php

use Illuminate\Support\Facades\Route;

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
// Admin



// Route::get('admin/admin', function () {
//     return view('admin.index');
// });

// Route::get('admin', 'AdminController@index');
// Route::post('admin', 'AdminController@store');

// Route::get('admin/customer', function () {
//     return view('admin.customer');
// });

// Route::get('admin/brand', function () {
//     return view('admin.brand');
// });

// Route::get('admin/vehicles', function () {
//     return view('admin.vehicles');
// });
//=======================================================
// Route::get('admin/manage-bookings', function () {
//     return view('admin.manage-bookings');
// });
// Route::get('admin/dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('admin1', function () {
//     return view('admin.login');
// });



Route::group(['middleware' => ['isLogin','customAuth']], function () {
    Route::get('admin/dashboard','DashboardController@index');
    Route::get('admin/contact','ContactController@index1');
    Route::resource('admin/manage-bookings', 'manageBookingController');
    Route::get('admin/manage-bookings/{id}/{status}', 'manageBookingController@changeStatus');
    Route::resource('admin/brand', 'BrandController');
    Route::resource('admin/vehicles', 'VehiclesController');
    Route::resource('admin/customer', 'CustomerController');
    Route::resource('admin', 'AdminController');
});

Route::get('loginAdmin','LoginAdminController@index');
Route::post('loginAdmin','LoginAdminController@login');
//=======================================================



// public Pages
// Route::get('index', function () {
//     return view('Pages.index');
// });
// Route::get('/', function () {
//     return view('Pages.index');
// });



Route::resource('/', 'BookingController');
Route::resource('/index', 'BookingController');


Route::get('/', 'ShowPublicController@index');
Route::get('index', 'ShowPublicController@index');



// ===================================
// ShowSearchCarController
// Route::get('car-search', function () {
//     return view('Pages.car-search');
// });
Route::get('car-search', 'ShowSearchCarController@index');
// Route::get('singleCar/{id}', 'ShowSearchCarController@Vehicle');

// ===================================
// Route::get('cars', function () {
//     return view('Pages.cars');
// });
Route::get('cars', 'ShowSearchCarController@index2');

// ===================================
Route::get('singleCar/{id}', 'ShowPublicController@Vehicle');
Route::post('singleCar/{id}', 'ReviewController@store');
// Route::get('singleCar', function () {
//     return view('Pages.car-single');
// });

// ===================================
Route::get('/search/', 'ShowSearchCarController@search')->name('car-search');
// ===================================


// Route::get('checkout', function () {
//     return view('Pages.checkout');
// });

// ==================================
// Route::get('checkout', 'OrderController@index');
Route::post('Checkout', 'OrderController@store');
// ===================================


Route::post('Checkout1', 'OrderVehicleController@store');
// ****************************************************************************


// Route::get('my-account', function () {
//     return view('Pages.my-account');
// });

Route::get('my-account', 'ProfileController@index');
Route::patch('my-account', 'ProfileController@update');










// ===================================================
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

// Route::get('/', 'BookingController@index');
// Route::post('/', 'BookingController@store');
// ===============================================


//Just View
// ===============================================
Route::get('cart', function () {
    return view('Pages.cart');
});

Route::get('service', function () {
    return view('Pages.service');
});
Route::get('terms', function () {
    return view('Pages.terms');
});
Route::get('about', function () {
    return view('Pages.about');
});
Route::get('404', function () {
    return view('Pages.404');
});
// Login
// *********************************************
Route::view('login','Pages.login');
Route::post('login', 'loginRegisterController@login');
Route::post('/register', 'loginRegisterController@register');
Route::get('/logout', 'loginRegisterController@logout');
// **********************************************




