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
Route::get('/cookie_clear','SettingsController@cookieClear');
Route::group(['middleware' => ['lang']], function (){
    Route::get('/', "BaseController@getIndex");
});
Auth::routes();
Route::get('/catalog', 'CatalogController@getAll');
Route::get('/catalog/{id}', 'CatalogController@getOne');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postIndex');
Route::post('/home/{id}', 'HomeController@deleteItem');
Route::post('ajax/modal', 'Ajax\ModalController@postIndex');

//default
Route::get('{url}', 'StaticController@getIndex');


