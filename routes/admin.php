<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin panel routes for your application. These
| routes are loaded by the RouteServiceProvider within a group with the
| prefix "admin" and the "admin" middleware group. You can change these settings
| in the RouteServiceProvider file (/app/Providers/RouteServiceProvider.php).
|
*/

Route::get('/', 'App\Http\Controllers\Admin\MainController@index')->name('dashboard');

Route::group([ 'name' => 'users.', 'prefix' => 'users' ], function () {

    Route::get('/', 'App\Http\Controllers\Admin\UserController@index')->name('index');
/*    Route::get('/create', 'App\Http\Controllers\Admin\UserController@create')->name('create');
    Route::post('/store', 'App\Http\Controllers\Admin\UserController@store')->name('store');
    Route::get('/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit')->name('edit');
    Route::post('/update/{id}', 'App\Http\Controllers\Admin\UserController@update')->name('update');
    Route::get('/delete/{id}', 'App\Http\Controllers\Admin\UserController@delete')->name('delete');*/

});
