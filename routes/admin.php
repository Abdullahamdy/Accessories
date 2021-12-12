<?php
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['guest:admin']], function () {
    Route::get('/login', 'AuthController@viewLogin')->name('admin.login');
    Route::post('/login', 'AuthController@login');
});
// Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/', 'HomeController@index');

    Route::get('home', 'HomeController@index')->name('adminlogout');

    Route::get('home', 'HomeController@index')->name('admin.home');
    Route::post('admin-logout', 'AuthController@adminLogout')->name('admin.logout');
    Route::get('settings', 'SettingController@view');
    Route::post('settings', 'SettingController@update');
    Route::resource('developer/settings/categories', 'SettingCategoryController');
    Route::resource('users', 'UserController');
    Route::get('users/toggle-boolean/{id}/{action}', 'UserController@toggleBoolean')->name('facilities.users.toggleBoolean');
    Route::resource('roles', 'RoleController');
    // Route::resource('logs', 'LogController')->only('index');


    Route::resource('product', 'ProductController');
    Route::resource('social-media', 'SocialController');
    Route::resource('contact-us', 'ContactusController');
    Route::resource('clients', 'ClientController');
    Route::resource('advertising', 'AdvertisingController');
    Route::resource('governorate', 'GovernorateController');
    Route::resource('city', 'CityController');
    Route::resource('category', 'CategoriesController');
    Route::get('clients/toggle-boolean/{id}/{action}', 'ClientController@toggleBoolean')->name('facilities.users.toggleBoolean');
    Route::get('shopping-basket', 'productController@shoppingBasket')->name('shopping-basket');
     Route::get('shopping-accept', 'productController@shoppingaccept')->name('shopping-accept');
     Route::get('shopping-refuse', 'productController@shoppingRefuse')->name('shopping-refuse');
     Route::get('show-attachment/{id}', 'productController@getAttachment')->name('show-attachment');
     Route::get('show-AdvertisingAttachment/{id}', 'AdvertisingController@getAttachment')->name('show-AdvertisingAttachment');
     Route::delete('delete-basket/{id}', 'productController@deleteBasket')->name('delete-basket');
     Route::delete('delete-attachmentProduct/{id}', 'productController@deleteAttachment')->name('delete-attachmentProduct');
     Route::delete('delete-advertisingAttachment/{id}', 'AdvertisingController@deleteAttachment')->name('delete-advertisingAttachment');
     Route::delete('edit-advertisingAttachment/{id}', 'AdvertisingController@editAttachment')->name('edit-advertisingAttachment');
     Route::delete('edit-attachmentProduct/{id}', 'productController@editAttachment')->name('edit-attachmentProduct');

// });
