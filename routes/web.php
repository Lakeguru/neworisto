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
//
// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/','ViewsController@index')->name('index');
Route::get('about','ViewsController@about')->name('about');
Route::get('allproduct','ViewsController@product')->name('product');
Route::get('contact','ViewsController@contact')->name('contact');
Route::get('allgallery','ViewsController@gallery')->name('gallery');
Route::get('logout','DashboardController@destroy')->name('logout');
Route::post('contact','ViewsController@store')->name('post.contact');
Route::get('all_product','ProductController@all')->name('all.product');
Route::get('all_service','ServiceController@all_service')->name('service.all_service');
Route::get('Serivce/{service}','ServiceController@show')->name('service.show');
Route::get('Produdct/{product}','ProductController@show')->name('product.show');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>'auth'], function (){
    Route::get('/slider','DashboardController@homepagec')->name('dashboard.slider');
    Route::post('postslider','DashboardController@slider')->name('dashboard.post');
    Route::get('product','ProductController@create')->name('product.index');
    Route::post('product','ProductController@store')->name('product.store');
    Route::get('delete','ProductController@delete')->name('product.delete');
    Route::get('service','ServiceController@create')->name('service.create');
    Route::post('service','ServiceController@store')->name('service.store');
    Route::get('delete','ServiceController@destroy')->name('service.delete');
    Route::get('gallery','GalleryController@create')->name('gallery.create');
    Route::post('gallery','GalleryController@store')->name('gallery.store');
    Route::get('delete','GalleryController@destroy')->name('gallery.delete');
});