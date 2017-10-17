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



Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
Route::resource('users','UsersController');
Route::get('tours/send','ToursController@send');
Route::resource('servers','ServersController');
Route::resource('tours','ToursController');
Route::get('tours/finish/{id}','ToursController@finish')->name('tours.finish');
Route::resource('photos','PhotosController');
Route::resource('cameras','CamerasController');

Route::get('photos/create/{id}','PhotosController@create');
Route::post('photos/create/{id}','PhotosController@create');



//Route::get('products', 'ProductsController@index');

//Route::resource('products','ServersController');
