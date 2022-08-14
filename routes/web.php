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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('home', 'Admin\HomeController@index');
    Route::get('mode', 'Admin\ModeController@index');
    Route::get('trable', 'Admin\TrableController@index');
    Route::get('mode/create', 'Admin\ModeController@add');
    Route::post('mode/create', 'Admin\ModeController@create');
    Route::get('trable/create', 'Admin\TrableController@add');
    Route::post('trable/create', 'Admin\TrableController@create');
    Route::get('mode', 'Admin\ModeController@index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
