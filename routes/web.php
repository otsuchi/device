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
    Route::get('mode', 'Admin\ModeController@index');
    Route::get('mode/create', 'Admin\ModeController@add');
    Route::post('mode/create', 'Admin\ModeController@create');
    Route::get('mode/edit', 'Admin\ModeController@edit');
    Route::post('mode/edit', 'Admin\ModeController@update');
    Route::get('mode/delete', 'Admin\ModeController@delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
