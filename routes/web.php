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
    Route::get('/home/update', 'HomeController@update')->name('admin.home.update');
    Route::get('/about', 'AboutController@index')->name('admin.about');
    Route::post('/about/update', 'AboutController@update')->name('admin.about.update');

    Route::get('/products/create', 'ProductController@create')->name('admin.products.create');
    Route::get('/products', 'ProductController@index')->name('admin.products');
    Route::get('/products/edit/{id}', 'ProductController@edit')->name('admin.products.edit');
    Route::post('/products/update/{id}', 'ProductController@update')->name('admin.products.update');
    Route::post('/products/store', 'ProductController@store')->name('admin.products.store');
    Route::get('/products/destroy/{id}', 'ProductController@destroy')->name('admin.products.destroy');
    Route::get('/products/restore/{id}', 'ProductController@restore')->name('admin.products.restore');
    Route::get('/products/kill/{id}', 'ProductController@kill')->name('admin.products.kill');
    Route::get('/products/trashed', 'ProductController@trashed')->name('admin.products.trashed');
    Route::post('/products/photos/destroy/{id}', 'ProductController@photoDestroy')->name('admin.products.photos.destroy');

    Route::get('/contact', 'ContactController@index')->name('admin.contact');
    Route::post('/contact/update', 'ContactController@update')->name('admin.contact.update');

    Route::group(['prefix' => 'sliders'], function() {
        Route::get('/', 'SliderController@index')->name('admin.home.sliders');
        Route::get('/create', 'SliderController@create')->name('admin.home.sliders.create');
        Route::post('/store', 'SliderController@store')->name('admin.home.sliders.store');
        Route::get('/edit/{id}', 'SliderController@edit')->name('admin.home.sliders.edit');
        Route::post('/update/{id}', 'SliderController@update')->name('admin.home.sliders.update');
        Route::get('/destroy/{id}', 'SliderController@destroy')->name('admin.home.sliders.destroy');
    });
});
