<?php

use App\Http\Controllers\ProductContoller;
use App\Http\Controllers\OrderContoller;
use App\Http\Controllers\UserContoller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('login','UserController@login');
Route::post('register','UserController@register');
Route::get('/products','ProductController@index');
Route::get('/products/{product}','ProductController@show');
Route::get('/users','UserController@index');
Route::get('users/{user}','UserController@show');
Route::get('users/{user}','UserController@update');
Route::get('users/{user}/orders','UserController@showOrder');
Route::get('users/{user}','UserController@update');

