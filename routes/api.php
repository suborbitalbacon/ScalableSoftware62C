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

    //Test route
    Route::get('restaurants/{restaurant}/posts', 'PostController@indexPostByRestaurant');

    //Task 1.6 - FIX
    Route::post('restaurants/{restaurant}/posts', 'PostController@storePostByRestaurant');
    Route::put('restaurants/{restaurant}/posts/{post}', 'PostController@updatePostByRestaurant');
    Route::delete('restaurants/{restaurant}/posts/{post}', 'PostController@deletePostByRestaurant');

    //Task 1.9 - WORKING
    Route::get('restaurantPostComments/{restaurant}', 'RestaurantController@showRestaurantByPostComment');

});
