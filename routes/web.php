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

Route::get('/restaurants', 'RestaurantController@listRestaurants');
Route::post('/restaurants', 'RestaurantController@createRestaurant');
Route::put('/restaurants/{restaurant}', 'RestaurantController@updateRestaurant');
Route::delete('/restaurants/{restaurant}', 'RestaurantController@deleteRestaurant');
