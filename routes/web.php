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

//Items
Route::get('/items','App\Http\Controllers\ecommerce@index');
Route::get('/update','App\Http\Controllers\ecommerce@edit');
Route::delete('/items/{id}', 'App\Http\Controllers\ecommerce@destroy');
Route::get('/items/{id}','App\Http\Controllers\ecommerce@show');
Route::post('/items', 'App\Http\Controllers\ecommerce@store');
Route::put('/items/{id}', 'App\Http\Controllers\ecommerce@update');


Route::get('/create', 'App\Http\Controllers\ecommerce@create');
// Route::put('/items/{id}', ' App\Http\Controllers\ecommerce@update');
// Route::delete('/items/{id}', ' App\Http\Controllers\ecommerce@destroy');

//Categories
Route::get('/categories','App\Http\Controllers\categories@index');
Route::post('/categories', 'App\Http\Controllers\categories@store');
Route::get('/create', 'App\Http\Controllers\ecommerce@create');
Route::put('/categories/{id}', ' App\Http\Controllers\categories@update');
Route::delete('/categories/{id}', ' App\Http\Controllers\categories@destroy');