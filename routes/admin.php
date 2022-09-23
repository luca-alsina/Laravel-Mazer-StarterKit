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

Route::get('/', function () {
    return view('admin.layouts.pages.dashboard');
})->name('dashboard');
