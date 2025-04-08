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

Route::get('/', 'DisplayController@index')->name('customer.index');
Route::get('/dich-vu', 'DisplayController@services')->name('customer.services');
Route::get('/sitemap.xml', 'Customer\DisplayController@sitemap')->name('customer.index');