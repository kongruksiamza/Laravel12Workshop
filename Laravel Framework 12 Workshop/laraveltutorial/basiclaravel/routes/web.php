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
Route::resource('user', 'UsersController');
Route::get('/search','SearchController@search')->name('user.search');
Route::get('/action','SearchController@action')->name('user.action');
Route::get('/downloadPDF/{id}','UsersController@downloadPDF');

Route::get('/create','DisplayController@create');
Route::get('/index','DisplayController@index');

Route::get('/auto','AutoCompleteController@index');
Route::post('/auto','AutoCompleteController@show')->name('autocomplete.show');


Route::resource('product', 'ProductController');

Route::get('uploadFile','FileController@index');
Route::post('uploadFile','FileController@upload')->name('image.upload');

Route::get('crop','Cropcontroller@index');
Route::post('crop','Cropcontroller@cropImage')->name('crop');

Route::get('food','FoodController@loadMore');
Route::get('vote','VoteController@index');
Route::post('vote','VoteController@show')->name('votesystem.show');
