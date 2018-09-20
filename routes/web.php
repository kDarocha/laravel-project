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

    Route::get('/product/{slug}', 'FrontController@singleProduct')->name('product.single');

    Route::get('/contact', 'FrontController@contact')->name('contact');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::get('/about', 'AboutController@index')->name('admin.about');
    Route::post('/about/update', 'AboutController@update')->name('admin.about.update');
    Route::get('/products/create', 'ProductController@create')->name('admin.products.create');
    Route::get('/products', 'ProductController@index')->name('admin.products');
    Route::get('/products/edit/{id}', 'ProductController@edit')->name('admin.products.edit');
    Route::get('/products/destroy/{id}', 'ProductController@destroy')->name('admin.products.destroy');
    Route::get('/products/trashed', 'ProductController@trashed')->name('admin.products.trashed');
    Route::get('/contact', 'ContactController@index')->name('admin.contact');
    Route::post('/contact/update', 'ContactController@update')->name('admin.contact.update');
});
