<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', 'Api\AuthController@login');
Route::post('/register', 'Api\AuthController@register');
Route::get('/pizzas', 'Api\PizzaController@index');
Route::get('/cart/{uuid}', 'Api\CartController@index');
Route::post('/cart', 'Api\CartController@store');
Route::put('/cart/{uuid}/{cartId}', 'Api\CartController@update');
Route::delete('/cart/{uuid}/{cartId}', 'Api\CartController@delete');
Route::post('/order', 'Api\OrderController@store');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/orders', 'Api\OrderController@index');
});
