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
Route::get('/','ViewsController@index')->name('index');

Route::get('/threads','ViewsController@index')->name('index');
Route::get('about','ViewsController@about')->name('about');
Route::get('allproduct','ViewsController@product')->name('product');
Route::get('contact','ViewsController@contact')->name('contact');
Route::get('allgallery','ViewsController@gallery')->name('gallery');
Route::get('logout','DashboardController@destroy')->name('logout');
Route::post('contact','ViewsController@store')->name('post.contact');
Route::get('all_product','ProductController@all')->name('all.product');
Route::get('all_service','ServiceController@all_service')->name('service.all_service');
Route::get('service/{id}','ServiceController@show')->name('service.show');
Route::get('all_product','ProductController@all')->name('all.product');
Route::get('product/{id}','ProductController@show')->name('product.show');
Route::get('all_gallery','GalleryController@all')->name('gallery.show');
Route::get('gallery/{id}','GalleryController@show')->name('gallery.show');
        
Auth::routes();
        
Route::get('/home', 'HomeController@index')->name('home');
        


Route::group(['prefix'=>'admin','middleware'=>'auth'], function (){
    Route::get('/slider','DashboardController@homepagec')->name('dashboard.slider');
    Route::post('postslider','DashboardController@slider')->name('dashboard.post');
    Route::get('all.p','ProductController@action')->name('product.all');
    Route::get('product','ProductController@create')->name('product.create');
    Route::post('product','ProductController@store')->name('product.store');
    Route::get('product/{product}/edit','ProductController@edit')->name('product.edit');
    Route::put('product/{product}','ProductController@update')->name('product.update');
    Route::delete('product/{product}','ProductController@destroy')->name('product.destroy');
    Route::get('service.all','ServiceController@all')->name('service.all');
    Route::get('service','ServiceController@create')->name('service.create');
    Route::post('service','ServiceController@store')->name('service.store');
    Route::get('service/{service}/edit','ServiceController@edit')->name('service.edit');
    Route::put('service/{service}','ServiceController@update')->name('service.update');
    Route::delete('service/{service}','ServiceController@destroy')->name('service.delete');
    Route::get('gallery','GalleryController@create')->name('gallery.create');
    Route::post('gallery','GalleryController@store')->name('gallery.store');
    Route::delete('gallery/{gallery}','GalleryController@destroy')->name('gallery.delete');
});
