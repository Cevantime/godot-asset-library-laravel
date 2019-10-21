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

Route::get('/', 'AssetController@index')->name('asset.index');
// Redirect for compatibility with the old asset library homepage URL
Route::permanentRedirect('/asset', '/');
Route::get('/asset/submit', 'AssetController@create')->name('asset.create');
Route::post('/asset', 'AssetController@store')->name('asset.store');

Route::get('/asset/{asset}', 'AssetController@show')->name('asset.show');

// Register authentication-related routes (including email verification routes)
Auth::routes(['verify' => true]);
