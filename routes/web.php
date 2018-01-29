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

Auth::routes();

Route::get('/', 'LandingController@landing')->name('landing');
Route::get('/contactus', 'LandingController@send')->name('contactus');

Route::get('/app', 'AppController@index')->name('app');

Route::get('/app/{cat_id}', 
  [
    'as' => 'show', 
    'uses' => 'AppController@show'
  ]);


Route::get('/administration', 'AdminController@index')->name('admin');
Route::get('/administration/stats', 'AdminController@stats')->name('stats');
Route::get('/administration/activity', 'AdminController@activity')->name('activity');

Route::get('/administration/orders', 'AdminController@orders')->name('orders');



