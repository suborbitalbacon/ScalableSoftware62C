<?php

use Illuminate\Http\Request;

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

Route::namespace('Api')->group(function() {
    Route::apiResource('categories', 'CategoryController');
    Route::apiResource('comments', 'CommentController');
    Route::apiResource('countries', 'CountryController');
    Route::apiResource('posts', 'PostController');
    Route::apiResource('restaurants', 'RestaurantController');
    Route::apiResource('roles', 'RoleController');
    Route::apiResource('users', 'UserController');
});
