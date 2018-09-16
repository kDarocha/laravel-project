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


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', 'FrontController@index')->name('home');

    Route::get('/about-us', 'FrontController@about')->name('about-us');

    Route::get('/products', 'FrontController@products')->name('products');

    Route::get('/contact', function() {
        return view('contact');
    })->name('contact');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('admin.home');
});
