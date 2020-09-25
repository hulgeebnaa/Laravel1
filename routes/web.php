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
Route::prefix('app')->group(function () {
    Route::get('/index', 'PagesController@index');
    Route::get('/services', 'PagesController@services');
    Route::get('/about', 'PagesController@about');
});