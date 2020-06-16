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


Route::get('/', 'HomeController@index');


Route::get('/reserve/{eventid}/{seat}/{type}', 'ReservationController@reserve')->name('bookseat');
Route::post('/reserve/booking', 'ReservationController@store')->name('bookseat.store');

Route::resource('/hallmaps', 'HallmapController');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/checkout', 'ReservationController@checkoutView');
	Route::get('/checkout/complete', 'ReservationController@checkout');
	Route::get('/add/cart/{id}', 'ReservationController@addToCart');
 	

 	Route::get('/view/events/{sort?}', function ($sort = "desc") {
       return view('event.show')->withEvents($events=App\Event::orderBy('date', $sort)->get());
    })->name('viewEvents');
    Route::get('/create/event', 'AdminController@index')->name('createevent');
	Route::post('/admin/createevent', 'AdminController@store')->name('createevent.store');

 	Route::get('/logout', 'Auth\LoginController@logout');
    Route::get('/home','ReservationController@home')->name('welcome');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Auth::routes();
