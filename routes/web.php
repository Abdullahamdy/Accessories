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

Route::group(['namespace'=>'frontend','middleware'=>'auth:client'],function(){
    Route::get('/','HomeController@index')->name('main');
    Route::get('product-details/{id}','ProductController@ProductDetails')->name('product-details');
Route::get('/product/{id}', 'ProductController@showProduct')->name('product');
Route::get('/basket', 'ProductController@basketProduct')->name('basket');
Route::get('/addcart/{id}', 'ProductController@addcart')->name('addcart');
Route::get('/delete-cart/{id}', 'ProductController@removeCart')->name('delete-cart');
Route::patch('/cart/{product}', 'ProductController@updateCart')->name('update-cart');
Route::get('/show-cart', 'ProductController@showcart')->name('show-cart');
Route::post('contact-us', 'ContactUsController@createcontactus')->name('contact-us');
Route::post('submit-form', 'ProductController@store');
Route::get('contact-us', 'ContactUsController@contactus')->name('contact-us');
Route::get('search', 'ProductController@search');
Route::get('far/{id}', 'ProductController@favourite')->name('far');
Route::get('show-favourite', 'ProductController@showFavourite')->name('show-favourite');







});
Route::get('/client-register','frontend\clientloginController@getFormAccount')->name('client-register');
Route::post('/create-account','frontend\clientloginController@register')->name('create-account');
Route::get('/clientlogin', 'frontend\clientloginController@index')->name('clientlogin');
Route::post('/clientLogin', 'frontend\clientloginController@login')->name('clientLogin');
Route::post('/logout', 'frontend\clientloginController@logout')->name('logout');






Route::get('/home', 'HomeController@index')->name('home');


Route::get('/productsearch', 'frontend\productController@search')->name('productsearch');


