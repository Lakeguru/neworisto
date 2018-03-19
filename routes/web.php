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
Route::get('product','ViewsController@product')->name('product');
Route::get('contact','ViewsController@contact')->name('contact');
Route::get('gallery','ViewsController@gallery')->name('gallery');
Route::get('logout','DashboardController@destroy')->name('logout');
Route::post('contact','ViewsController@store')->name('post.contact');
Route::get('all_product','ProductController@all')->name('all.product');
// Route::get('/dashboard','DashboardController@dashboard');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();



Route::group(['prefix'=>'admin','middleware'=>'auth'], function (){
    Route::get('/dashboard','DashboardController@dashboard')->name('dashboard.index');
    Route::get('/slider','DashboardController@homepagec')->name('dashboard.slider');
    Route::post('postslider','DashboardController@slider')->name('dashboard.post');
    Route::get('product','ProductController@create')->name('product.index');
    Route::post('product','ProductController@store')->name('product.store');
    Route::get('service','ServiceController@create')->name('service.create');
    Route::post('service','ServiceController@store')->name('service.store');
    Route::get('gallery','GalleryController@create')->name('gallery.create');
    Route::post('gallery','GalleryController@store')->name('gallery.store');
  
});